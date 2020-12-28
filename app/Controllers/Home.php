<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AlumniModel;

class Home extends BaseController
{

	public function index()
	{
		// processing data sipadu
		if (isset($_REQUEST['code']) && $_REQUEST['code']) {

			$this->modelAuth = new \App\Models\AuthModel();
			$this->modelAlumni = new \App\Models\AlumniModel();
			$faker = \Faker\Factory::create('id_ID');

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

			if (isset($hasil['profile']['nim'])) {
				if ($this->modelAuth->getUserByUsername($hasil['profile']['nim']) == NULL) {
					$data = array(
						"username" => $hasil['profile']['nim'],
						"nama" => $hasil['profile']['nama']
					);
					$this->modelAuth->insertUser($data);
				}

				$user = $this->modelAuth->getUserByUsername($hasil['profile']['nim']);

				session()->set([
					'id_user' => $user['id'],
					'username' => $user['username'],
					'nama' => $user['nama'],
					'role' => $user['role']
				]);

				// binding session dengan database
				if($this->modelAlumni->getUserByNIM(session('username')) == NULL){
					$bindUser = [
						'angkatan'      => $faker->numberBetween($min = 1, $max = 62),
						'nama'	=> session('nama'),
						'nim'	=> session('username'),
						'jenisKelamin'  => $faker->randomElement($array = array ('L','P')),
                        'tempatLahir'   => $faker->city,
                        'tanggalLahir'  => $faker->date($format = 'Y-m-d', $max = 'now'),
                        'telpAlumni'    => $faker->phoneNumber,
                        'alamat'        => $faker->address,
                        'statusBekerja' => $faker->boolean,
                        'perkiraanPensiun' => $faker->year,
                        'jabatanTerakhir'  => $faker->jobTitle,
                        'aktifPNS'      => $faker->boolean,
					];
					$this->modelAlumni->db->table('alumni')->insert($bindUser);;
				}

			} else {
				if ($this->modelAuth->getUserByUsername($hasil['profile']['username']) == NULL) {
					$data = array(
						"username" => $hasil['profile']['username'],
						"nama" => $hasil['profile']['nama']
					);
					$this->modelAuth->insertUser($data);
				}

				$user = $this->modelAuth->getUserByUsername($hasil['profile']['username']);

				session()->set([
					'id_user' => $user['id'],
					'username' => $user['username'],
					'nama' => $user['nama'],
					'role' => $user['role']
				]);

				// binding session dengan database
				if($this->modelAlumni->getUserByNIM(session('username')) == NULL){
					$bindUser = [
						'angkatan'      => $faker->numberBetween($min = 1, $max = 62),
						'nama'	=> session('nama'),
						'nim'	=> session('username'),
						'jenisKelamin'  => $faker->randomElement($array = array ('L','P')),
                        'tempatLahir'   => $faker->city,
                        'tanggalLahir'  => $faker->date($format = 'Y-m-d', $max = 'now'),
                        'telpAlumni'    => $faker->phoneNumber,
                        'alamat'        => $faker->address,
                        'statusBekerja' => $faker->boolean,
                        'perkiraanPensiun' => $faker->year,
                        'jabatanTerakhir'  => $faker->jobTitle,
                        'aktifPNS'      => $faker->boolean,
					];
					$this->modelAlumni->db->table('alumni')->insert($bindUser);
				}
			}

			setcookie('login', 'yes', time() + 60, $_SERVER['SERVER_NAME']);

			echo '<script>window.close();</script>';

			session()->setFlashdata('pesan', 'Login berhasil. Hai, <b>' . session('username') . '!</b>');
			session()->setFlashdata('warna', 'success');
			die();
		}

		// // processing login sso bps (masih belum tahu bisa apa ngga)
		// $this->modelBPS = new \JKD\SSO\Client\Provider\KeycloakResourceOwner();
		// if (isset($_GET['code']) && $_GET['code']) {
		// 	if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

		// 		unset($_SESSION['oauth2state']);
		// 		exit('Invalid state');
		// 	} else {
		// 		$auth = new \App\Controllers\Auth;

		// 		// get token
		// 		try {
		// 			$token = $auth->provider->getAccessToken('authorization_code', [
		// 				'code' => $_GET['code']
		// 			]);
		// 		} catch (Exception $e) {
		// 			exit('Gagal mendapatkan akses token : ' . $e->getMessage());
		// 		}

		// 		try {
		// 			$user = $auth->provider->getResourceOwner($token);
		// 			echo "Id : " . $user->getId();
		// 			echo "Nama : " . $user->getName();
		// 			echo "Nama Depan: " . $user->getnamaDepan();
		// 			echo "Nama Belakang: " . $user->getnamaBelakang();
		// 			echo "E-Mail : " . $user->getEmail();
		// 			echo "Username : " . $user->getUsername();
		// 			echo "NIP : " . $user->getNip();
		// 			echo "NIP Baru : " . $user->getNipBaru();
		// 			echo "Kode Organisasi : " . $user->getKodeOrganisasi();
		// 			echo "Kode Provinsi : " . $user->getKodeProvinsi();
		// 			echo "Kode Kabupaten : " . $user->getKodeKabupaten();
		// 			echo "Alamat Kantor : " . $user->getAlamatKantor();
		// 			echo "Provinsi : " . $user->getProvinsi();
		// 			echo "Kabupaten : " . $user->getKabupaten();
		// 			echo "Golongan : " . $user->getGolongan();
		// 			echo "Jabatan : " . $user->getJabatan();
		// 			echo "Foto : " . $user->getUrlFoto();
		// 			echo "Eselon : " . $user->getEselon();
		// 		} catch (Exception $e) {
		// 			exit('Gagal Mendapatkan Data Pengguna: ' . $e->getMessage());
		// 		}
		// 	}
		// }		

		$data = [
			'title' => 'Dashboard | Riset 5 Website Alumni',
		];
		return view('pages/dashboard', $data);
	}

	//--------------------------------------------------------------------


	public function login()
	{
		if (session()->has('id_user')) {
			$data = [
				'title' => 'Dashboard | Riset 5 Website Alumni',
			];
			return view('pages/dashboard', $data);
		} else {
			$data = [
				'title' 	=> 'Login | Riset 5 Website Alumni',
				'template'	=> 'login',
			];
			return view('login/login', $data);
		}
	}

	//--------------------------------------------------------------------

	// dipindah ke User.PHP
	// public function userInfo()
	// {
	// 	$data = [
	// 		'title' => 'Profile | Riset 5 Website Alumni',
	// 	];

	// 	return view('pages/userinfo', $data);
	// }

	public function reset()
	{
		$data['title'] = 'Reset Password';
		$data['template'] = 'reset';
		return view('reset/inputemail', $data);
	}

	public function resetPass()
	{
		$data['title'] = 'Reset Password';
		$data['template'] = 'reset';
		return view('reset/resetpass', $data);
	}

	public function search() //pencarian
	{
		// nyoba faker,, gakepake di controller ini
		// $faker = \Faker\Factory::create('id_ID');
		// dd($faker->phoneNumber);

		$pager = \Config\Services::pager();
		$model = new \App\Models\AlumniModel;
		$kunci = $this->request->getVar('cari');

		if ($kunci) {
			$query = $model->orderBy('nama',$direction='ASC')->pencarian($kunci);
			// $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan ".$query->affectedRows()." Data";
		} else {
			$query = $model->orderBy('nama',$direction='ASC');
			// $jumlah = "";
		}

		$data = [
			'title' => 'Pencarian Alumni | Website Riset 5',
			'alumni' => $query->paginate(10),
			'pager' => $model->pager,
			'page'  => $this->request->getVar('page') ? $this->request->getVar('page') : 1,
			// 'jumlah' => $jumlah,
		];

		echo view('pages/search', $data);
	}
	//--------------------------------------------------------------------
	
	public function profile()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
        $query = $model->bukaProfile(session('username'))->getRow();
		
		$jk = $query->jenisKelamin;
		$sb = $query->statusBekerja;
		$ap = $query->aktifPNS;

		if($jk=="L") {
            $jk = "Laki-laki";
        } else {
			$jk = "Perempuan";
		}

		if($sb==0) {
            $sb = "Tidak bekerja";
        } else {
			$sb = "Masih bekerja";
		}

		if($ap==0) {
            $ap = "Tidak aktif sebagai PNS";
        } else {
			$ap = "Aktif sebagai PNS";
		}
		
		$data = [
			'title' 		=> 'Profil User | Website Riset 5',
            'angkatan'      => $query->angkatan,
			'nama'  		=> $query->nama,
            'nim'           => $query->nim,
            'jenisKelamin'  => $jk,
            'tempatLahir'   => $query->tempatLahir,
            'tanggalLahir'  => $query->tanggalLahir,
            'telpAlumni'    => $query->telpAlumni,
			'alamat'        => $query->alamat,
			'statusBekerja'	=> $sb,
			'perkiraanPensiun' 	=> $query->perkiraanPensiun,
			'jabatanTerakhir' 	=> $query->jabatanTerakhir,
			'aktifPNS'		=> $ap,
		];
		return view('pages/userInfo', $data);
	}

	//--------------------------------------------------------------------

	public function update($nim)
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
        $query = $model->bukaProfile(session('username'))->getRow();

		$data = [
			'title' 		=> 'Update Profil User | Website Riset 5',
            'angkatan'      => $query->angkatan,
			'nama'  		=> $query->nama,
            'nim'           => $query->nim,
            'jenisKelamin'  => $query->jenisKelamin,
            'tempatLahir'   => $query->tempatLahir,
            'tanggalLahir'  => $query->tanggalLahir,
            'telpAlumni'    => $query->telpAlumni,
			'alamat'        => $query->alamat,
			'statusBekerja'	=> $query->statusBekerja,
			'perkiraanPensiun' 	=> $query->perkiraanPensiun,
			'jabatanTerakhir' 	=> $query->jabatanTerakhir,
			'aktifPNS'		=> $query->aktifPNS,
		];
		return view('pages/update', $data);
	}

	//--------------------------------------------------------------------

	public function updating()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$this->modelAlumni = new AlumniModel();
    
		$data = [
			'nama'  		=> $this->request->getVar('nama'),
            'nim'           => session('username'),
            'angkatan'      => $this->request->getVar('angkatan'),
            'jenisKelamin'  => $this->request->getVar('jenisKelamin'),
            'tempatLahir'   => $this->request->getVar('tempatLahir'),
            'tanggalLahir'  => $this->request->getVar('tanggalLahir'),
            'telpAlumni'    => $this->request->getVar('telpAlumni'),
			'alamat'        => $this->request->getVar('alamat'),
			'statusBekerja' => $this->request->getVar('statusBekerja'),
			'perkiraanPensiun' => $this->request->getVar('perkiraanPensiun'),
			'jabatanTerakhir'  => $this->request->getVar('jabatanTerakhir'),
			'aktifPNS'      => $this->request->getVar('aktifPNS'),
		];

		$this->modelAlumni->replace($data);

		$query = $this->modelAlumni->bukaProfile(session('username'))->getRow();
		$jk = $query->jenisKelamin;
		$sb = $query->statusBekerja;
		$ap = $query->aktifPNS;

		if($jk=="L") {
            $jk = "Laki-laki";
        } else {
			$jk = "Perempuan";
		}

		if($sb==0) {
            $sb = "Tidak bekerja";
        } else {
			$sb = "Masih bekerja";
		}

		if($ap==0) {
            $ap = "Tidak aktif sebagai PNS";
        } else {
			$ap = "Aktif sebagai PNS";
		}
		$require = [
			'title' 		=> 'Update Profil User | Website Riset 5',
			'nama'  		=> $query->nama,
            'nim'           => $query->nim,
            'angkatan'      => $query->angkatan,
            'jenisKelamin'  => $jk,
            'tempatLahir'   => $query->tempatLahir,
            'tanggalLahir'  => $query->tanggalLahir,
            'telpAlumni'    => $query->telpAlumni,
			'alamat'        => $query->alamat,
			'statusBekerja'	=> $sb,
			'perkiraanPensiun' 	=> $query->perkiraanPensiun,
			'jabatanTerakhir' 	=> $query->jabatanTerakhir,
			'aktifPNS'		=> $ap,
		];

		return view('pages/userInfo', $require);
	}

	//--------------------------------------------------------------------

	public function profileAlumni()
    {
        $model = new AlumniModel();
        $kunci = $this->request->getVar('nim');
        $query = $model->bukaProfile($kunci)->getRow();
        $jk = $query->jenisKelamin;
		$sb = $query->statusBekerja;
		$ap = $query->aktifPNS;

        if($jk=='P'){
            $jk = "Perempuan";
        } else {
            $jk = "Laki-laki";
		}

		if($sb==0) {
            $sb = "Tidak bekerja";
        } else {
			$sb = "Masih bekerja";
		}

		if($ap==0) {
            $ap = "Tidak aktif sebagai PNS";
        } else {
			$ap = "Aktif sebagai PNS";
		}

		$data = [
			'title' 		=> 'Profil Alumni | Website Riset 5',
			'nama'  		=> $query->nama,
            'nim'           => $query->nim,
            'angkatan'      => $query->angkatan,
            'jenisKelamin'  => $jk,
            'tempatLahir'   => $query->tempatLahir,
            'tanggalLahir'  => $query->tanggalLahir,
            'telpAlumni'    => $query->telpAlumni,
			'alamat'        => $query->alamat,
			'statusBekerja'	=> $sb,
			'perkiraanPensiun' 	=> $query->perkiraanPensiun,
			'jabatanTerakhir' 	=> $query->jabatanTerakhir,
			'aktifPNS'		=> $ap,
		];
		return view('pages/profileAlumni', $data);
	}
	
	//--------------------------------------------------------------------


}
