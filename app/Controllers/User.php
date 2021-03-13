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
	}

	public function index() //user detail + form update
	{
	}

	//--------------------------------------------------------------------

	public function searchAndFilter()
	{
		$pager = \Config\Services::pager();
		$model = new \App\Models\AlumniModel;

		// dd($this->request->getVar('cari'));

		$minAng = (isset($_GET['min'])) ? $_GET['min'] : $model->getMinAngkatan()[0]->angkatan;
		$maxAng = (isset($_GET['max'])) ? $_GET['max'] : $model->getMaxAngkatan()[0]->angkatan;
		$cari = (isset($_REQUEST['cari'])) ? $_REQUEST['cari'] : "";

		if ($minAng > $maxAng) {
			$maxAng = $minAng + $maxAng;
			$minAng = $maxAng - $minAng;
			$maxAng = $maxAng - $minAng;
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

		$query = $model->getAlumniFilter($cari, $min_angkatan, $max_angkatan);
		$jumlah = [
			'text' => (!empty($cari)) ?
				"Terdapat " . $query->countAllResults(false) . " alumni dengan kata kunci `<B>$cari</B>` ditemukan." :
				"Memuat " . $query->countAllResults(false) . " data alumni.",
			'ret' => $query->countAllResults(false)
		];
		// dd($query->paginate(5));

		//search ajax
		if (isset($_POST['cari'])) {
			// $query = $model->getAlumniFilter($cari, $min_angkatan, $max_angkatan);
			$search = '';
			foreach (array_keys($_REQUEST) as $key) {
				$search .= '&' . $key . '=' . $_REQUEST[$key];
			}

			return json_encode([
				'data' => $query->paginate(5),
				'jumlah' => $jumlah['text'],
				'ret' => $jumlah['ret'],
				'pager' => $model->pager->links(),
				'search' => $search
			]);
		}

		if ($query->countAllResults(false) == 0) {
			$data = [
				'judulHalaman' => 'Pencarian Alumni | Website Riset 5',
				'active' => '',
			];

			return view('websia/kontenWebsia/searchAndFilter/searchKosong', $data);
		} else {
			$paginate = ($query->countAllResults(false) > 5) ? 5 : $query->countAllResults(false);
			$data = [
				'judulHalaman' => 'Pencarian Alumni | Website Riset 5',
				'active' => '',
				'cari' => $cari,
				'alumni1' => $model->getAlumniFilter($cari, $min_angkatan, $max_angkatan)->paginate($paginate),
				// 'alumni2' => $model->orderBy('nama', $direction = 'ASC')->getAlumniFilter($cari, $min_angkatan, $max_angkatan)->get()->getResult(),
				'pager' => $model->pager,
				'page'  => isset($_GET['page']) ? (int)$_GET["page"] : 1,
				'jumlah' => $jumlah,
				'min_angkatan' => $model->getMinAngkatan()[0]->angkatan,
				'max_angkatan' => $model->getMaxAngkatan()[0]->angkatan
			];
			// dd($data['alumni1']);
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

		// dd($query->getRow());

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
			'nama'  		=> $query1->nama,
			'nim'           => session('nim'),
			'jenis_kelamin'  => $query1->jenis_kelamin,
			'tempat_lahir'   => $query1->tempat_lahir,
			'tanggal_lahir'  => $query1->tanggal_lahir,
			'telp_alumni'    => $_POST['telp_alumni'],
			'email'			=> $_POST['email'],
			'alamat'        => $_POST['alamat'],
			'status_bekerja' => $_POST['status_bekerja'],
			'perkiraan_pensiun' => $query1->perkiraan_pensiun,
			'jabatan_terakhir'  => $_POST['jabatan_terakhir'],
			'aktif_pns'      => $_POST['aktif_pns'],
			'ig'			=> $_POST['ig'],
			'fb'			=> $_POST['fb'],
			'twitter'		=> $_POST['twitter'],
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
		// dd($query->getResult());

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'pendidikan'      => $query->getResult(),
			// 'jumlah' => $model->getCountPendidikanByNIM(session('nim'))
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

	// salahh masihan
	// public function updateTempatKerja()
	// {
	// 	if (!session()->has('id_user'))
	// 		return redirect()->to('/');

	// 	$model = new AlumniModel();
	// 	$kunci = $model->getTempatKerjaByNIM(session('nim'))->getRow()->id_tempat_kerja;

	// 	$data = [
	// 		'nama_instansi'      => $_POST['nama_instansi'],
	// 		'alamat_instansi'  		=> $_POST['alamat_instansi'],
	// 		'telp_instansi'  => $_POST['telp_instansi'],
	// 		'faks_instansi'   => $_POST['faks_instansi'],
	// 		'email_instansi'  => $_POST['email_instansi'],
	// 	];

	// 	$model->db->table('tempat_kerja')->set($data)->where('id_tempat_kerja', $kunci)->update();

	// 	$query = $model->getTempatKerjaByNIM(session('nim'));

	// 	$data = [
	// 		'judulHalaman' => 'Edit Profil',
	// 		'login' => 'sudah',
	// 		'active' 		=> 'profil',
	// 		'tempat_kerja' => $query->getRow(),
	// 	];
	// 	return view('websia/kontenWebsia/editProfile/editTempatKerja.php', $data);
	// }

	public function editPrestasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query = $model->getPrestasiByNIM(session('nim'));

		// dd($query->getResult());

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'prestasi'      => $query->getResult(),
			// 'jumlah' => $model->getCountPrestasiByNIM(session('nim'))
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

		// dd($query->getResult());

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'publikasi'      => $query->getResult(),
			// 'jumlah' => $model->getCountPublikasiByNIM(session('nim'))
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
		// dd($query->getRow());

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
				'email'      => $_POST['email'],
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
