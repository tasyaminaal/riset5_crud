<?php

namespace App\Controllers;

use App\Models\AlumniModel;


class User extends BaseController
{
	public function __construct()
	{
		if (!session()->has('id_user'))
			echo '<script>window.location.replace("' . base_url('login') . '");</script>';

		if (session()->has('role'))
			if (!in_array("2", session('role')))
				echo '<script>window.location.replace("' . base_url() . '");</script>';

		$this->form_validation = \Config\Services::validation();
	}

	public function index() //user detail + form update
	{
	}

	//--------------------------------------------------------------------

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

		if (isset($_GET['cari']))
			$cari = $_GET['cari'];
		else
			$cari = "";

		$query = $model->orderBy('nama', $direction = 'ASC')->getAlumniFilter($cari, $min_angkatan, $max_angkatan);
		if (!empty($cari)) {
			$jumlah = "Terdapat " . $query->countAllResults(false) . " alumni dengan kata kunci `<B>$cari</B>` ditemukan.";
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
				'cari' => $cari,
				'alumni1' => $query->paginate(5),
				'alumni2' => $model->orderBy('nama', $direction = 'ASC')->getAlumniFilter($cari, $min_angkatan, $max_angkatan)->get()->getResult(),
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

		$sql = "SELECT * FROM tampilan where nim = " . session('nim');
		$tampilan = $model->query($sql);

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
			'checked'	=> $tampilan->getRow(),
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

		$sql = "SELECT * FROM tampilan where nim = $kunci";
		$tampilan = $model->query($sql);

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
			'checked'	=> $tampilan->getRow(),
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
		$sql = "SELECT * FROM tampilan where nim = " . session('nim');
		$tampilan = $model->query($sql);

		$sqlcek = "SELECT password_hash from users where id = " . session('id_user');
		$cekLM = $model->query($sqlcek);

		if ($cekLM->getRow()->password_hash != NULL) {
			session()->set([	//cek login manual atau bukan
				'manual' => 'yes',
			]);
		}

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'alumni'      => $query->getRow(),
			'checked'	=> $tampilan->getRow(),
		];
		return view('websia/kontenWebsia/editProfile/editBiodata.php', $data);
	}

	// FUNGSINYA BELUM BISA DIEKSEKUSI```````````````````````````````````````````````````````
	public function updateFotoProfil()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');


		$model = new AlumniModel();
		$query1 = $model->bukaProfile(session('nim'))->getRow();
		$foto = $query1->foto_profil;

		$validated = $this->validate([
			'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/png]|max_size[file_upload,2048]'
		]);

		if ($validated == FALSE) {
			session()->setFlashdata('edit-foto-fail', 'Format atau ukuran file tidak sesuai.');
			// Kembali ke function index supaya membawa data uploads dan validasi
			return redirect()->to(base_url('User/editProfil'));
		} else {
			$avatar = $this->request->getFile('file_upload');
			$avatar->move(ROOTPATH . '/public/img/user/userid_' . session('id_user'));
			if ($foto != 'default.svg') {
				$url = ROOTPATH . '/public/img/' . $foto;
				if (is_file($url))
					unlink($url);
			}

			$data = [
				'foto_profil' => 'user/userid_' . session('id_user') . '/' . htmlspecialchars($avatar->getName())
			];

			$model->db->table('alumni')->set($data)->where('nim', session('nim'))->update();
			session()->setFlashdata('edit-foto-success', 'Foto Profil Berhasil Diubah');
			return redirect()->to(base_url('User/editProfil'));
		}
	}

	public function hapusFotoProfil()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query1 = $model->bukaProfile(session('nim'))->getRow();
		$foto = $query1->foto_profil;

		if ($foto != 'default.svg') {
			$url = ROOTPATH . '/public/img/' . $foto;
			if (is_file($url))
				unlink($url);
		}

		$data = [
			'foto_profil' => 'default.svg'
		];


		$model->db->table('alumni')->set($data)->where('nim', session('nim'))->update();
		session()->setFlashdata('hapus-foto', 'Foto berhasil dihapus');
		return redirect()->to(base_url('User/editProfil'));
	}

	public function updateProfil()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$telp_alumni   	= htmlspecialchars($_POST['telp_alumni']);
		$email			= htmlspecialchars($_POST['email']);
		$alamat       	= htmlspecialchars($_POST['alamat']);
		$ig				= htmlspecialchars($_POST['ig']);
		$fb				= htmlspecialchars($_POST['fb']);
		$twitter		= htmlspecialchars($_POST['twitter']);
		$biografi		= htmlspecialchars($_POST['biografi']);
		$cttl = 0;
		$cemail = 0;
		$calamat = 0;
		$cjab = 0;
		$cig = 0;
		$ctw = 0;
		$cfb = 0;
		if (isset($_POST['checkTanggalLahir'])) {
			$cttl = 1;
		}
		if (isset($_POST['checkEmail'])) {
			$cemail = 1;
		}
		if (isset($_POST['checkAlamat'])) {
			$calamat = 1;
		}
		if (isset($_POST['checkJabatan'])) {
			$cjab = 1;
		}
		if (isset($_POST['checkInstagram'])) {
			$cig = 1;
		}
		if (isset($_POST['checkTwitter'])) {
			$ctw = 1;
		}
		if (isset($_POST['checkFacebook'])) {
			$cfb = 1;
		}

		$data = [
			'nim'		=> session('nim'),
			'telp_alumni'    => $telp_alumni,
			'email'			=> $email,
			'alamat'        => $alamat,
			'ig'			=> $ig,
			'fb'			=> $fb,
			'twitter'		=> $twitter,
			'biografi'		=> $biografi,
		];

		$data2 = [
			'ttl' => $cttl,
			'email' => $cemail,
			'alamat' => $calamat,
			'jabatan' => $cjab,
			'instagram' => $cig,
			'twitter' => $ctw,
			'facebook' => $cfb,
		];

		// dd($this->form_validation->run($data, 'editProfil'));

		if ($this->form_validation->run($data, 'editProfil') === FALSE) {
			// dd($this->form_validation->getError('email'));
			session()->setFlashdata('edit-bio-fail', 'Biodata gagal Disimpan');
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('error-email', $this->form_validation->getError('email'));
			session()->setFlashdata('error-telp_alumni', $this->form_validation->getError('telp_alumni'));
			// dd(session('errors'));
			return redirect()->to(base_url('User/editProfil'));
		} else {
			$model->db->table('alumni')->set($data)->where('nim', session('nim'))->update();
			$model->db->table('tampilan')->set($data2)->where('nim', session('nim'))->update();
			session()->setFlashdata('edit-bio-success', 'Biodata Berhasil Disimpan');
			return redirect()->to(base_url('User/editProfil'));
		}
	}

	public function editPendidikan()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getPendidikanByNIM(session('nim'));
		$sql = "SELECT * FROM tampilan where nim = " . session('nim');
		$tampilan = $model->query($sql);
		// dd($query->getResult());

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'pendidikan'      => $query->getResult(),
			'checked'	=> $tampilan->getRow(),
		];
		return view('websia/kontenWebsia/editProfile/editPendidikan.php', $data);
	}

	public function updatePendidikan()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$cpendidikan=0;
		if (isset($_POST['checkPendidikan'])) {
			$cpendidikan = 1;
		}

		$data1 = [
			'program_studi'     => htmlspecialchars($_POST['program_studi']),
			'judul_tulisan'		=> htmlspecialchars($_POST['judul_tulisan']),
		];

		$data2 = [
			'jenjang'    => htmlspecialchars($_POST['jenjang']),
			'instansi'	 => htmlspecialchars($_POST['instansi']),
			'tahun_masuk'  => htmlspecialchars($_POST['tahun_masuk']),
			'tahun_lulus'  => htmlspecialchars($_POST['tahun_lulus'])
		];

		$data3 = [
			'pendidikan' => $cpendidikan,
		];

		$model->db->table('pendidikan_tinggi')->set($data1)->where('id_pendidikan', $_POST['id_pendidikan'])->update();
		$model->db->table('pendidikan')->set($data2)->where('id_pendidikan', $_POST['id_pendidikan'])->update();
		$model->db->table('tampilan')->set($data3)->where('nim', session('nim'))->update();

		return redirect()->to(base_url('User/editPendidikan'));
	}

	public function addPendidikan()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data2 = [
			'jenjang'    => htmlspecialchars($_POST['jenjang']),
			'instansi'	 => htmlspecialchars($_POST['instansi']),
			'tahun_masuk'  => htmlspecialchars($_POST['tahun_masuk']),
			'tahun_lulus'  => htmlspecialchars($_POST['tahun_lulus']),
			'nim'		=> session('nim'),
		];

		$model->db->table('pendidikan')->insert($data2);

		$data1 = [
			'program_studi'     => htmlspecialchars($_POST['program_studi']),
			'judul_tulisan'		=> htmlspecialchars($_POST['judul_tulisan']),
		];

		$model->db->table('pendidikan_tinggi')->insert($data1);

		return redirect()->to(base_url('User/editPendidikan'));
	}

	public function deletePendidikan()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$model->deletePendidikanById($_POST['id_pendidikan']);

		return redirect()->to(base_url('User/editPendidikan'));
	}

	public function editTempatKerja()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getTempatKerjaByNIM(session('nim'));
		$listtk = $model->getTempatKerja()->getResult();
		// dd($listtk);
		// dd($query->getRow());
		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'tempat_kerja'      => $query->getRow(),
			'list'		=> $listtk,
		];
		return view('websia/kontenWebsia/editProfile/editTempatKerja.php', $data);
	}

	public function updateTempatKerja()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data = [
			'id_tempat_kerja'      => $_POST['id_tempat_kerja'],
		];

		$model->db->table('alumni_tempat_kerja')->set($data)->where('nim', session('nim'))->update();

		return redirect()->to(base_url('User/editTempatKerja'));
	}

	public function addTempatKerja()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data1 = [
			'nama_instansi'      => htmlspecialchars($_POST['nama_instansi']),
			'alamat_instansi'  		=> htmlspecialchars($_POST['alamat_instansi']),
			'telp_instansi'  => htmlspecialchars($_POST['telp_instansi']),
			'faks_instansi'   => htmlspecialchars($_POST['faks_instansi']),
			'email_instansi'  => htmlspecialchars($_POST['email_instansi']),
		];

		$model->db->table('tempat_kerja')->insert($data1);


		$data2 = [
			'id_tempat_kerja'      => $model->getIdTempatKerja(htmlspecialchars($_POST['nama_instansi'])),
		];

		$model->db->table('alumni_tempat_kerja')->set($data2)->where('nim', session('nim'))->update();

		return redirect()->to(base_url('User/editTempatKerja'));
	}

	public function editPrestasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getPrestasiByNIM(session('nim'));
		$sql = "SELECT * FROM tampilan where nim = " . session('nim');
		$tampilan = $model->query($sql);

		// dd($query->getResult());

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'prestasi'      => $query->getResult(),
			'checked'	=> $tampilan->getRow(),
		];

		return view('websia/kontenWebsia/editProfile/editPrestasi.php', $data);
	}

	public function updatePrestasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$cprestasi=0;
		if (isset($_POST['checkPrestasi'])) {
			$cprestasi = 1;
		}

		$data = [
			'nama_prestasi'     => htmlspecialchars($_POST['nama_prestasi']),
			'tahun_prestasi'		=> htmlspecialchars($_POST['tahun_prestasi']),
			'nim'				=> session('nim'),
		];

		$data2 = [
			'prestasi' => $cprestasi,
		];

		$model->db->table('prestasi')->set($data)->where('id_prestasi', $_POST['id_prestasi'])->update();
		$model->db->table('tampilan')->set($data2)->where('nim', session('nim'))->update();

		return redirect()->to(base_url('User/editPrestasi'));
	}

	public function addPrestasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data = [
			'nama_prestasi'     => htmlspecialchars($_POST['nama_prestasi']),
			'tahun_prestasi'		=> htmlspecialchars($_POST['tahun_prestasi']),
			'nim'				=> session('nim'),
		];

		$model->db->table('prestasi')->insert($data);

		return redirect()->to(base_url('User/editPrestasi'));
	}

	public function deletePrestasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$model->deletePrestasiById($_POST['id_prestasi']);

		return redirect()->to(base_url('User/editPrestasi'));
	}

	public function editPublikasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getPublikasiByNIM(session('nim'));

		// dd($query->getResult());

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'publikasi'      => $query->getResult(),
		];

		return view('websia/kontenWebsia/editProfile/editPublikasi.php', $data);
	}

	// LOGICNYAA BELUMM MASUKKK````````````````````````````````````````````````````
	// public function updatePublikasi()
	// {}

	// DATABASENYAA KURANG MASHOOKKKK BOSQUE
	public function addPublikasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data = [
			'judul'     => htmlspecialchars($_POST['judul']),
			'topik'     => htmlspecialchars($_POST['topik']),
			'deskripsi'     => htmlspecialchars($_POST['deskripsi']),
			'publisher'     => htmlspecialchars($_POST['publisher']),
			'tanggal_disahkan'     => htmlspecialchars($_POST['tanggal_disahkan']),
			'author'     => htmlspecialchars($_POST['author']),
		];

		$model->db->table('publikasi')->insert($data);

		return redirect()->to(base_url('User/editPublikasi'));
	}

	public function editAkun()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getUsersById(session('id_user'));
		// dd($query->getRow());

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'user'      => $query->getRow(),
		];

		return view('websia/kontenWebsia/editProfile/editAkun.php', $data);
	}

	// BELOM KELAR FUNGSINYA ``````````````````````````````````````````````````````````````````````
	public function updateAkun()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$curpass = $model->getUser(session('id_user'))->getRow()->password_hash;
		$inputpass = $_POST['passlama'];
		// dd($curpass);
		// dd($inputpass);
		dd(password_verify($inputpass, $curpass));
		// dd($model->getUser(session('id_user'))->getRow());
		// dd($pass,$passlama);

		// bingung validasinya
		if (password_verify($inputpass, $curpass)) {
			if ($_POST['passbaru'] == $_POST['ulangpassbaru']) {
				$data = [
					'password_hash' => password_hash($_POST['passbaru'], PASSWORD_DEFAULT),
				];

				$model->db->table('users')->set($data)->where('id', session('id_user'))->update();
				return redirect()->to(base_url('User/editAkun'));
			} else {
				echo "password baru tidak cocok";
			}
		} else {
			echo "Password lama salah";
		}
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
		// ini untuk ganti nya sementara
		return view('websia/layoutWebsia/lamanMasihDibangun', $data);
		// return view('kontenWebsia/galeri/galeriVidAlumni', $data);
	}

	public function galeriWisuda()
	{
		$data['judulHalaman'] = 'Galeri Video Wisuda';
		$data['active'] = 'galeri';
		$data['login'] = 'sudah';

		return view('websia/layoutWebsia/lamanMasihDibangun', $data);
		// return view('kontenWebsia/galeri/galeriWisuda', $data);
	}
}
