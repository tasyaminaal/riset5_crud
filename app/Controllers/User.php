<?php

namespace App\Controllers;

use App\Models\AlumniModel;


class User extends BaseController
{
	public function __construct()
	{
		if (!session()->has('id_user'))
			echo '<script>window.location.replace("' . base_url() . '");</script>';

		if (session()->has('role'))
			if (!in_array("2", session('role')))
				echo '<script>window.location.replace("' . base_url() . '");</script>';
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

	//--------------------------------------------------------------------

}
