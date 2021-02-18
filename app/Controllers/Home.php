<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlumniModel;
use Config\Services;
use Exception;
use Myth\Auth\Models\LoginModel;
use \JKD\SSO\Client\Provider\Keycloak;

class Home extends BaseController
{

	public function index()
	{
		$this->modelAuth = new \App\Models\AuthModel();
		$this->modelAlumni = new \App\Models\AlumniModel();
		$this->loginModel = new LoginModel();
		$this->roleModel = new \App\Models\RoleModel();
		$faker = \Faker\Factory::create('id_ID');

		// processing data sipadu
		if (isset($_REQUEST['code']) && $_REQUEST['code']) {

			$curl_status = curl_init();

			curl_setopt_array($curl_status, [
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => 'https://ws.stis.ac.id/oauth/token',
				CURLOPT_POST => 1,

				CURLOPT_POSTFIELDS => [
					'grant_type' => 'authorization_code',
					'client_id' => '14',
					'client_secret' => '3r3grLcMKEEqhq1gHbks1ZzztbFdasLbzpg0YDj0',
					'redirect_uri' => 'http://localhost:8080',
					'code' => $_REQUEST['code']
				]
			]);
			curl_setopt($curl_status, CURLOPT_FRESH_CONNECT, TRUE);
			$result = curl_exec($curl_status);
			curl_close($curl_status);
			$hasil = json_decode($result); //hasil json untuk token
			$token = $hasil->access_token;

			if (!isset($token))
				return redirect()->to('/');

			$authorization = "Authorization: Bearer " . $token;

			$curl_status = curl_init();

			curl_setopt_array($curl_status, [
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => 'https://ws.stis.ac.id/api/user',
				CURLOPT_HTTPHEADER => array($authorization)
			]);

			curl_setopt($curl_status, CURLOPT_FRESH_CONNECT, TRUE);

			$result = curl_exec($curl_status);
			curl_close($curl_status);

			// echo ($result);	//cek result sipadu
			// die();

			$hasil = json_decode($result, true);	// hasil akhir sipadu

			if (isset($hasil['profile']['nim'])) {	//apabila alumni login dengan akun sipadu mahasiswa
				$user = $hasil['profile'];

				// binding session dengan database (insert data ke tabel alumni kalau belum terdaftar di tabel alumni) 
				if ($this->modelAlumni->getUserByNIM($user['nim']) == NULL) {
					$data = [
						'nim'                => $user['nim'],
						'angkatan'           => $faker->numberBetween($min = 1, $max = 62),
						'nama'               => $user['nama'],
						'jenis_kelamin'      => $faker->randomElement($array = array('L', 'P')),
						'tempat_lahir'       => $faker->city,
						'tanggal_lahir'      => $faker->date($format = 'Y-m-d', $max = 'now'),
						'telp_alumni'        => $faker->phoneNumber,
						'email'              => $user['nim'] . "@stis.ac.id",
						'alamat'             => $faker->address,
						'status_bekerja'     => $faker->boolean,
						'perkiraan_pensiun'  => $faker->year,
						'jabatan_terakhir'   => $faker->jobTitle,
						'aktif_pns'          => $faker->boolean,
						'nip_bps'            => $user['nim']
					];
					$this->modelAlumni->db->table('alumni')->insert($data);
				}

				//insert new user sipadu (mahasiswa)
				if ($this->modelAuth->getUserByUsername($hasil['profile']['nim']) == NULL) {
					$now = date("Y-m-d H:i:s");
					$data = [
						'email'				=> $user['nim'] . "@stis.ac.id",
						'username'			=> $user['nim'],
						'nim'				=> $user['nim'],
						'fullname'			=> $user['nama'],
						'password_hash'		=> null,
						'reset_at'			=> null,
						'active'			=> 1,
						'force_pass_reset'	=> 0,
						'created_at'		=> $now,
						'updated_at'		=> $now
					];
					$this->modelAuth->insertUser($data);
				}

				$user = $this->modelAuth->getUserByUsername($hasil['profile']['nim']);
				session()->set([	//set session (informasi identitas) dari tabel users
					'id_user' => $user['id'],
					'nim' => $user['nim'],
					'nama' => $user['fullname']
				]);

				$query = $this->roleModel->getRole(session('id_user'));
				$role = array();

				if ($query != null) {
					foreach ($query as $arr) {
						array_push($role, $arr->group_id);
					}
					session()->set([
						'role' => $role
					]);
				} else {
					$data = [
						'group_id'	=> 2,
						'user_id'	=> session('id_user')
					];
					$this->roleModel->insertRole($data);
					$query = $this->roleModel->getRole(session('id_user'));
					foreach ($query as $arr) {
						array_push($role, $arr->group_id);
					}
					session()->set([
						'role' => $role
					]);
				}

				$ipAddress = Services::request()->getIPAddress();
				$this->recordLoginAttempt(session('nim') . '@stis.ac.id', $ipAddress, session('id_user') ?? null, true);	//insert ke tabel auth_login untuk log login
			} else {	//apabila alumni memakai akun dosen
				/* KATANYA LANGSUNG ALERT AJA */
				// session()->setFlashdata('pesan', 'Silahkan gunakan akun Sipadu Mahasiswa atau akun BPS, atau hubungi admin website');
				echo '<script>alert(\'Silahkan gunakan akun Sipadu Mahasiswa atau akun BPS, atau hubungi admin website\')</script>';
				die();
			}

			setcookie('login', 'yes', time() + 60, $_SERVER['SERVER_NAME']);

			echo '<script>window.close();</script>';

			session()->setFlashdata('pesan', 'Login berhasil. Hai, <b>' . session('username') . '!</b>');
			session()->setFlashdata('warna', 'success');
			die();
		}

		// // processing login sso bps
		// if (isset($_GET['code']) && $_GET['code']) {
		// 	$provider = new Keycloak([
		// 		'authServerUrl'         => 'https://sso.bps.go.id',
		// 		'realm'                 => 'pegawai-bps',
		// 		'clientId'              => '02700-dbalumni-mu1',
		// 		'clientSecret'          => 'e69810d0-f915-49c4-9ed1-cd9edf05436a',
		// 		'redirectUri'           => 'http://localhost:8080',
		// 		'scope' 				=> 'openid profile-pegawai'
		// 	]);

		// 	if (empty($_GET['state']) || ($_GET['state'] !== session('oauth2state'))) {

		// 		session()->remove('oauth2state');
		// 		exit('Invalid state');
		// 	} else {

		// 		$provider = new Keycloak([
		// 			'authServerUrl'         => 'https://sso.bps.go.id',
		// 			'realm'                 => 'pegawai-bps',
		// 			'clientId'              => '02700-dbalumni-mu1',
		// 			'clientSecret'          => 'e69810d0-f915-49c4-9ed1-cd9edf05436a',
		// 			'redirectUri'           => 'http://localhost:8080',
		// 			'scope' 				=> 'openid profile-pegawai'
		// 		]);

		// 		// get token
		// 		try {
		// 			$token = $provider->getAccessToken('authorization_code', [
		// 				'code' => $_GET['code']
		// 			]);
		// 		} catch (Exception $e) {
		// 			exit('Gagal mendapatkan akses token : ' . $e->getMessage());
		// 		}

		// 		try {
		// 			$user = $provider->getResourceOwner($token);

		// 			// dd(var_dump($user->toArray()));	//cek result sso-bps
		// 			// die();

		// 			$curl = curl_init();
		// 			curl_setopt_array($curl, [
		// 				CURLOPT_RETURNTRANSFER => 1,
		// 				CURLOPT_URL => "https://pbd.bps.go.id/simpeg_api/pkl_stis_2021",
		// 				CURLOPT_POST => 1,
		// 				CURLOPT_POSTFIELDS => [
		// 					'apiKey'	=> "0smUjhQHo2SMu2MJkcJmgEmEkv4qAfCvTW8PwnQQ724=",
		// 					'kategori'	=> "get_riwayat_pendidikan",
		// 					'nipbps'	=> $user->getNip()
		// 				]
		// 			]);
		// 			curl_setopt($curl, CURLOPT_FRESH_CONNECT, TRUE);

		// 			$result = curl_exec($curl);
		// 			curl_close($curl);
		// 			$hasil = json_decode($result);

		// 			if (isset($hasil->pesan)) {
		// 				echo "data tidak ditemukan";
		// 			} else {
		// 				$riwayat_pendidikan = array();
		// 				foreach ($hasil as $data)
		// 					array_push($riwayat_pendidikan, $data->Nama_Instansi_Pendidikan);
		// 				if (in_array('Akademi Ilmu Statistik', $riwayat_pendidikan) || in_array('Sekolah Tinggi Ilmu Statistik', $riwayat_pendidikan) || in_array('Politeknin Statistika STIS', $riwayat_pendidikan)) {

		// 					// binding session dengan database
		// 					if ($this->modelAlumni->getUserByNIM($user->getNip()) == NULL) {

		// 						$data = [
		// 							'nim'                => $user->getNip(),
		// 							'angkatan'           => $faker->numberBetween($min = 1, $max = 62),
		// 							'nama'               => $user->getName(),
		// 							'jenis_kelamin'      => $faker->randomElement($array = array('L', 'P')),
		// 							'tempat_lahir'       => $faker->city,
		// 							'tanggal_lahir'      => $faker->date($format = 'Y-m-d', $max = 'now'),
		// 							'telp_alumni'        => $faker->phoneNumber,
		// 							'email'              => $user->getEmail(),
		// 							'alamat'             => $faker->address,
		// 							'status_bekerja'     => $faker->boolean,
		// 							'perkiraan_pensiun'  => $faker->year,
		// 							'jabatan_terakhir'   => $faker->jobTitle,
		// 							'aktif_pns'          => $faker->boolean,
		// 							'nip'				 => $user->getNipBaru(),
		// 							'nip_bps'            => $user->getNip()
		// 						];
		// 						$this->modelAlumni->db->table('alumni')->insert($data);
		// 					}

		// 					if ($this->modelAuth->getUserByUsername($user->getUsername()) == NULL) {
		// 						$now = date("Y-m-d H:i:s");
		// 						$data = [
		// 							'email'				=> $user->getEmail(),
		// 							'username'			=> $user->getUsername(),
		// 							'nim'				=> $user->getNip(),
		// 							'fullname'			=> $user->getName(),
		// 							'password_hash'		=> null,
		// 							'reset_at'			=> null,
		// 							'active'			=> 1,
		// 							'force_pass_reset'	=> 0,
		// 							'created_at'		=> $now,
		// 							'updated_at'		=> $now
		// 						];
		// 						$this->modelAuth->insertUser($data);
		// 					}

		// 					$hasil = $this->modelAuth->getUserByUsername($user->getUsername());

		// 					session()->set([	//set session (informasi identitas) dari tabel users
		// 						'id_user' => $hasil['id'],
		// 						'nim' => $hasil['nim'],
		// 						'nama' => $hasil['fullname']
		// 					]);

		// 					$query = $this->roleModel->getRole(session('id_user'));
		// 					$role = array();

		// 					if ($query != null) {
		// 						foreach ($query as $arr) {
		// 							array_push($role, $arr->group_id);
		// 						}
		// 						session()->set([
		// 							'role' => $role
		// 						]);
		// 					} else {
		// 						$data = [
		// 							'group_id'	=> 2,
		// 							'user_id'	=> session('id_user')
		// 						];
		// 						$this->roleModel->insertRole($data);
		// 						$query = $this->roleModel->getRole(session('id_user'));
		// 						foreach ($query as $arr) {
		// 							array_push($role, $arr->group_id);
		// 						}
		// 						session()->set([
		// 							'role' => $role
		// 						]);
		// 					}

		// 					$ipAddress = Services::request()->getIPAddress();
		// 					$this->recordLoginAttempt($hasil['email'], $ipAddress, session('id_user') ?? null, true);

		// 					setcookie('login', 'yes', time() + 60, $_SERVER['SERVER_NAME']);

		// 					session()->setFlashdata('pesan', 'Login berhasil. Hai, <b>' . session('username') . '!</b>');
		// 					session()->setFlashdata('warna', 'success');
		// 					echo '<script>window.close();</script>';

		// 					die();
		// 				} else
		// 					echo "Bukan Alumni";
		// 			}

		// 			// echo "Id : " . $user->getId();
		// 			// echo "Nama : " . $user->getName();
		// 			// echo "Nama Depan: " . $user->getnamaDepan();
		// 			// echo "Nama Belakang: " . $user->getnamaBelakang();
		// 			// echo "E-Mail : " . $user->getEmail();
		// 			// echo "Username : " . $user->getUsername();
		// 			// echo "NIP : " . $user->getNip();
		// 			// echo "NIP Baru : " . $user->getNipBaru();
		// 			// echo "Kode Organisasi : " . $user->getKodeOrganisasi();
		// 			// echo "Kode Provinsi : " . $user->getKodeProvinsi();
		// 			// echo "Kode Kabupaten : " . $user->getKodeKabupaten();
		// 			// echo "Alamat Kantor : " . $user->getAlamatKantor();
		// 			// echo "Provinsi : " . $user->getProvinsi();
		// 			// echo "Kabupaten : " . $user->getKabupaten();
		// 			// echo "Golongan : " . $user->getGolongan();
		// 			// echo "Jabatan : " . $user->getJabatan();
		// 			// echo "Foto : " . $user->getUrlFoto();
		// 			// echo "Eselon : " . $user->getEselon();
		// 		} catch (Exception $e) {
		// 			exit('Gagal Mendapatkan Data Pengguna: ' . $e->getMessage());
		// 		}
		// 	}
		// }

		if (session()->has('id_user')) {
			$data = [
				'judulHalaman' 	=> 'Beranda WEBSIA',
				'active' 		=> 'beranda',
				'login'			=> 'sudah'
			];
		} else {
			$data = [
				'judulHalaman' 	=> 'Beranda WEBSIA',
				'login'			=> 'belum'
			];
		}

		return view('websia/kontenWebsia/halamanUtama/beranda', $data);
		// return view('pages/dashboard', $data);
	}

	public function recordLoginAttempt(string $email, string $ipAddress = null, int $userID = null, bool $success)
	{
		return $this->loginModel->insert([
			'ip_address' => $ipAddress,
			'email' => $email,
			'user_id' => $userID,
			'date' => date('Y-m-d H:i:s'),
			'success' => (int)$success
		]);
	}

	public function daftar()
	{
		return view('login/daftar.php');
	}

	// public function resetPass()
	// {
	// 	return view('login/resetpass.php');
	// }

	public function searchAndFilter()
	{
		$pager = \Config\Services::pager();
		$model = new \App\Models\AlumniModel;
		if (isset($_GET['min']))
			$minAng = $_GET['min'];
		else
			$minAng = $model->getMinAngkatan()[0]->angkatan;

		if (isset($_GET['max']))
			$maxAng = $_GET['max'];
		else
			$maxAng = $model->getMaxAngkatan()[0]->angkatan;

		if ($minAng > $maxAng) {
			$temp = $minAng;
			$minAng = $maxAng;
			$maxAng = $temp;
		}
		if ($minAng != NULL && $minAng >= $model->getMinAngkatan()[0]->angkatan) {
			$min_angkatan  = $minAng;
		} else {
			$min_angkatan  = $model->getMinAngkatan()[0]->angkatan;
		}
		if ($maxAng != NULL && $maxAng <= $model->getMaxAngkatan()[0]->angkatan) {
			$max_angkatan  = $maxAng;
		} else {
			$max_angkatan  = $model->getMaxAngkatan()[0]->angkatan;
		}

		$cari = $_GET['cari'];
			$query = $model->orderBy('nama', $direction = 'ASC')->getAlumniFilter($cari, $min_angkatan, $max_angkatan);
			if (!empty($cari)) {
				$jumlah = "Sekitar " . $query->countAllResults(false) . " alumni dengan kata kunci `<B>$cari</B>` ditemukan.";
			} else {
				$jumlah = "Memuat " . $query->countAllResults(false) . " data alumni.";
			}
		if ($query->countAllResults(false) == 0) {
			$data = [
				'judulHalaman' => 'Pencarian Alumni | Website Riset 5',
				'active' => '',
			];

            return view('websia/kontenWebsia/searchAndFilter/searchKosong', $data);
        } else {
			$data = [
				'judulHalaman' => 'Pencarian Alumni | Website Riset 5',
				'active' => '',
				'alumni' => $query->paginate(9),
				'pager' => $model->pager,
				'page'  => isset($_GET['page']) ? (int)$_GET["page"] : 1,
				'jumlah' => $jumlah,
				'min_angkatan' => $model->getMinAngkatan()[0]->angkatan,
				'max_angkatan' => $model->getMaxAngkatan()[0]->angkatan
			];

            return view('websia/kontenWebsia/searchAndFilter/searchAndFilter', $data);
        }
	}

	public function profil()
	{
		if (!session()->has('id_user') && !logged_in())
			return redirect()->to('/');

		$model = new AlumniModel();
		$query1 = $model->bukaProfile(session('nim'))->getRow();
		//isi :
		// 'angkatan'      
		// 'nama' 	
		// 'nim'           
		// 'jenis_kelamin'  
		// 'tempat_lahir'   
		// 'tanggal_lahir'  
		// 'telp_alumni'    
		// 'alamat'        
		// 'status_bekerja'	
		// 'perkiraan_pensiun'
		// 'jabatan_terakhir' 
		// 'aktif_pns'		

		$query2 = $model->getTempatKerjaByNIM(session('nim'))->getRow();
		//isi :
		// 'id_tempat_kerja'	
		// 'nama_instansi'
		// 'alamat_instansi'
		// 'telp_instansi'
		// 'email_instansi'
		// 'faks_instansi'

		$query3 = $model->getRole(session('id_user'))->getResult();
		//isi :
		// name

		$query4 = $model->getAlumniByAngkatan($query1->angkatan);
		//isi :
		// pencarian rekomendasi

		$query5 = $model->getPrestasiByNIM(session('nim'))->getResult();
		//isi :
		// 'id_prestasi'
		// 'nama_prestasi'
		// 'nim'
		// 'tahun_prestasi'

		$query6 = $model->getPendidikanByNIM(session('nim'))->getResult();
		//isi :
		// 'id_pendidikan'
		// 'jenjang'
		// 'judul_tulisan'
		// 'nim'
		// 'program_studi'
		// 'tahun_lulus'
		// 'tahun_masuk'
		// 'universitas'

		$query7 = $model->getUsersById(session('id_user'))->getRow();
		//isi :
		// 'email'

		$status = 'user';
		$jk = $query1->jenis_kelamin;
		$sb = $query1->status_bekerja;
		$ap = $query1->aktif_pns;



		if ($jk == "L") {
			$jk = "Laki-laki";
		} else {
			$jk = "Perempuan";
		}

		if ($sb == 0) {
			$sb = "Tidak bekerja";
		} else {
			$sb = "Masih bekerja";
		}

		if ($ap == 0) {
			$ap = "Tidak aktif sebagai PNS";
		} else {
			$ap = "Aktif sebagai PNS";
		}

		$data = [
			'status'		=> $status,
			'judulHalaman' 		=> 'Profil User | Website Riset 5',
			'active' 		=> 'profil',
			'alumni'      => $query1,
			'jenis_kelamin'  => $jk,
			'status_bekerja'	=> $sb,
			'aktif_pns'		=> $ap,
			'tempat_kerja'	=> $query2,
			'role' => $query3,
			'prestasi' => $query5,
			'pendidikan' => $query6,
			'user' => $query7,
			'rekomendasi'          => $query4->orderBy('nama', $direction = 'random')->limit(4)->get()->getResult(),
		];
		return view('websia/kontenWebsia/userProfile/userProfile', $data);
	}

	public function rekomendasi()
	{
		$model = new AlumniModel();

		$query = $model->getAlumniByAngkatan($model->bukaProfile(session('nim'))->getRow()->angkatan);
		// dd($query->orderBy('nama', $direction = 'asc')->get()->getResult());

		$data = [
			'judulHalaman'  => 'Rekomendasi',
			'active' 		=> 'rekomendasi',
			'jumlah'        => $query->countAllResults(false),
			'alumni'          => $query->orderBy('nama', $direction = 'asc')->paginate(16),
			'pager'		=> $query->orderBy('nama', $direction = 'asc')->pager
		];

		return view('websia/kontenWebsia/userProfile/rekomendasi', $data);
	}

	public function profilAlumni()
	{
		$model = new AlumniModel();
		$kunci = $_GET['nim'];
		$query1 = $model->bukaProfile($kunci)->getRow();
		//isi :
		// 'angkatan'      
		// 'nama' 	
		// 'nim'           
		// 'jenis_kelamin'  
		// 'tempat_lahir'   
		// 'tanggal_lahir'  
		// 'telp_alumni'    
		// 'alamat'        
		// 'status_bekerja'	
		// 'perkiraan_pensiun'
		// 'jabatan_terakhir' 
		// 'aktif_pns'		

		$query2 = $model->getTempatKerjaByNIM($kunci)->getRow();
		//isi :	
		// 'id_tempat_kerja'	
		// 'nama_instansi'
		// 'alamat_instansi'
		// 'telp_instansi'
		// 'email_instansi'
		// 'faks_instansi'

		$query4 = $model->getAlumniByAngkatan($model->bukaProfile(session('nim'))->getRow()->angkatan);
		//isi :
		// pencarian rekomendasi

		$query5 = $model->getPrestasiByNIM($kunci)->getResult();
		//isi :
		// 'id_prestasi'
		// 'nama_prestasi'
		// 'nim'
		// 'tahun_prestasi'

		$query6 = $model->getPendidikanByNIM($kunci)->getResult();
		//isi :
		// 'id_pendidikan'
		// 'jenjang'
		// 'judul_tulisan'
		// 'nim'
		// 'program_studi'
		// 'tahun_lulus'
		// 'tahun_masuk'
		// 'universitas'

		$query7 = $model->getUsersByNIM($kunci)->getRow();
		//isi :
		// 'email'

		$status = 'bukan user';
		$jk = $query1->jenis_kelamin;
		$sb = $query1->status_bekerja;
		$ap = $query1->aktif_pns;

		if ($jk == "L") {
			$jk = "Laki-laki";
		} else {
			$jk = "Perempuan";
		}

		if ($sb == 0) {
			$sb = "Tidak bekerja";
		} else {
			$sb = "Masih bekerja";
		}

		if ($ap == 0) {
			$ap = "Tidak aktif sebagai PNS";
		} else {
			$ap = "Aktif sebagai PNS";
		}

		$data = [
			'status'		=> $status,
			'judulHalaman' 		=> 'Profil User | Website Riset 5',
			'active' 		=> 'profil',
			'alumni'      => $query1,
			'jenis_kelamin'  => $jk,
			'status_bekerja'	=> $sb,
			'aktif_pns'		=> $ap,
			'tempat_kerja'	=> $query2,
			'prestasi' => $query5,
			'pendidikan' => $query6,
			'user' => $query7,
			'rekomendasi'          => $query4->orderBy('nama', $direction = 'random')->limit(4)->get()->getResult(),
		];
		return view('websia/kontenWebsia/userProfile/userProfile', $data);
	}

	public function editProfil()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->bukaProfile(session('nim'));

		// dd($query->getRow()->alamat);

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'alumni'      => $query->getRow(),
		];
		return view('websia/kontenWebsia/editProfile/editBiodata.php', $data);
	}

	public function updateProfil()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query1 = $model->bukaProfile(session('nim'))->getRow();

		$data = [
			'angkatan'      => $query1->angkatan,
			'nama'  		=> $_POST['nama'],
			'nim'           => session('nim'),
			'jenis_kelamin'  => $_POST['jenis_kelamin'],
			'tempat_lahir'   => $_POST['tempat_lahir'],
			'tanggal_lahir'  => $query1->tanggal_lahir,
			'telp_alumni'    => $_POST['telp_alumni'],
			'alamat'        => $_POST['alamat'],
			'status_bekerja' => $_POST['status_bekerja'],
			'perkiraan_pensiun' => $_POST['perkiraan_pensiun'],
			'jabatan_terakhir'  => $_POST['jabatan_terakhir'],
			'aktif_pns'      => $_POST['aktif_pns'],
		];

		$model->db->table('alumni')->set($data)->where('nim', session('nim'))->update();

		$query2 = $model->bukaProfile(session('nim'));

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'alumni' => $query2->getRow(),
		];
		return view('websia/kontenWebsia/editProfile/editBiodata.php', $data);
	}

	public function editPendidikan()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getPendidikanByNIM(session('nim'));

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'pendidikan'      => $query->getResult(),
			'jumlah' => $model->getCountPendidikanByNIM(session('nim'))
		];
		return view('websia/kontenWebsia/editProfile/editPendidikan.php', $data);
	}
	// belum bikin
	// public function updatePendidikan()
	// {}

	public function editTempatKerja()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getTempatKerjaByNIM(session('nim'));

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'tempat_kerja'      => $query->getRow(),
		];
		return view('websia/kontenWebsia/editProfile/editTempatKerja.php', $data);
	}

	// salahh masihan
	public function updateTempatKerja()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$kunci = $model->getTempatKerjaByNIM(session('nim'))->getRow()->id_tempat_kerja;

		$data = [
			'nama_instansi'      => $_POST['nama_instansi'],
			'alamat_instansi'  		=> $_POST['alamat_instansi'],
			'telp_instansi'  => $_POST['telp_instansi'],
			'faks_instansi'   => $_POST['faks_instansi'],
			'email_instansi'  => $_POST['email_instansi'],
		];

		$model->db->table('tempat_kerja')->set($data)->where('id_tempat_kerja', $kunci)->update();

		$query = $model->getTempatKerjaByNIM(session('nim'));

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'tempat_kerja' => $query->getRow(),
		];
		return view('websia/kontenWebsia/editProfile/editTempatKerja.php', $data);
	}

	public function editPrestasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getPrestasiByNIM(session('nim'));

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'prestasi'      => $query->getResult(),
			'jumlah' => $model->getCountPrestasiByNIM(session('nim'))
		];

		return view('websia/kontenWebsia/editProfile/editPrestasi.php', $data);
	}
	// belum bikin
	// public function updatePrestasi()
	// {}

	public function editPublikasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getPublikasiByNIM(session('nim'));

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'prestasi'      => $query->getResult(),
			'jumlah' => $model->getCountPublikasiByNIM(session('nim'))
		];

		return view('websia/kontenWebsia/editProfile/editPublikasi.php', $data);
	}
	// belum bikin
	// public function updatePublikasi()
	// {}

	public function editAkun()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getUsersById(session('id_user'));

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'user'      => $query->getRow(),
		];

		return view('websia/kontenWebsia/editProfile/editAkun.php', $data);
	}

	public function updateAkun()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		// belum tahu nih cara validasi ginian
		if ($_POST['passbaru'] == $_POST['ulangpassbaru']) {
			$data = [
				'username'      => $_POST['username'],
				'password_hash' => password_hash($_POST['passbaru'], PASSWORD_DEFAULT),
			];

			$model->db->table('users')->set($data)->where('id', session('id_user'))->update();
		}

		$query = $model->getUsersByNIM(session('id_user'));

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'username'      => $query->getRow()->username,
		];

		return view('websia/kontenWebsia/editProfile/editAkun.php', $data);
	}

	public function galeriFoto()
	{
		$data['judulHalaman'] = 'Galeri Kenangan Alumni';
		$data['active'] = 'galeri';
		return view('websia/kontenWebsia/galeri/galeriAlumni', $data);
	}

	public function galeriVideo()
	{
		$data['judulHalaman'] = 'Galeri Video Kegiatan Alumni';
		$data['active'] = 'galeri';
		$data['login'] = 'sudah';
		return view('kontenWebsia/galeri/galeriVidAlumni', $data);
	}

	public function galeriWisuda()
	{
		$data['judulHalaman'] = 'Galeri Video Wisuda';
		$data['active'] = 'galeri';
		$data['login'] = 'sudah';
		return view('kontenWebsia/galeri/galeriWisuda', $data);
	}

	public function coba()
	{
		return view('cobaWebsia/map');
	}
}
