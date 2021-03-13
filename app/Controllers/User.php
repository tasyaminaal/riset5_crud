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
			'error'		=> session()->getFlashdata('pesan'),
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

		$validated = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/png]|max_size[file_upload,2048]'
        ]);

        if ($validated == FALSE) {
			session()->setFlashdata('pesan', 'Format atau ukuran file tidak sesuai.');
            // Kembali ke function index supaya membawa data uploads dan validasi
            return redirect()->to(base_url('User/editProfil'));
 
        } else {
			$avatar = $this->request->getFile('file_upload');
            $avatar->move(ROOTPATH.'/public/img/fotoProfil/');
 
            $data = [
                'foto_profil' => $avatar->getName()
            ];
     
            $model->db->table('alumni')->set($data)->where('nim', session('nim'))->update();
			session()->setFlashdata('pesan', 'Berhasil');
            return redirect()->to(base_url('User/editProfil')); 
        }
	}

	public function updateProfil()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();
		$query1 = $model->bukaProfile(session('nim'))->getRow();

		$data = [
			'telp_alumni'    => $_POST['telp_alumni'],
			'email'			=> $_POST['email'],
			'alamat'        => $_POST['alamat'],
			'ig'			=> $_POST['ig'],
			'fb'			=> $_POST['fb'],
			'twitter'		=> $_POST['twitter'],
		];

		$model->db->table('alumni')->set($data)->where('nim', session('nim'))->update();

		return redirect()->to(base_url('User/editProfil'));
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
		];
		return view('websia/kontenWebsia/editProfile/editPendidikan.php', $data);
	}

	public function updatePendidikan()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data1 = [
			'program_studi'     => $_POST['program_studi'],
			'judul_tulisan'		=> $_POST['judul_tulisan'],
		];

		$data2 = [
			'jenjang'    => $_POST['jenjang'],
			'instansi'	 => $_POST['instansi'],
			'tahun_masuk'  => $_POST['tahun_masuk'],
			'tahun_lulus'  => $_POST['tahun_lulus']
		];

		$model->db->table('pendidikan_tinggi')->set($data1)->where('id_pendidikan', $_POST['id_pendidikan'])->update();
		$model->db->table('pendidikan')->set($data2)->where('id_pendidikan', $_POST['id_pendidikan'])->update();

		return redirect()->to(base_url('User/editPendidikan'));
	}

	public function addPendidikan()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data2 = [
			'jenjang'    => $_POST['jenjang'],
			'instansi'	 => $_POST['instansi'],
			'tahun_masuk'  => $_POST['tahun_masuk'],
			'tahun_lulus'  => $_POST['tahun_lulus'],
			'nim'		=> session('nim'),
		];

		$model->db->table('pendidikan')->insert($data2);

		$data1 = [
			'program_studi'     => $_POST['program_studi'],
			'judul_tulisan'		=> $_POST['judul_tulisan'],
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
			'nama_instansi'      => $_POST['nama_instansi'],
			'alamat_instansi'  		=> $_POST['alamat_instansi'],
			'telp_instansi'  => $_POST['telp_instansi'],
			'faks_instansi'   => $_POST['faks_instansi'],
			'email_instansi'  => $_POST['email_instansi'],
		];

		$model->db->table('tempat_kerja')->insert($data1);
		

		$data2 = [
			'id_tempat_kerja'      => $model->getIdTempatKerja($_POST['nama_instansi']),
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

		// dd($query->getResult());

		$data = [
			'judulHalaman' => 'Edit Profil',
			'login' => 'sudah',
			'active' 		=> 'profil',
			'prestasi'      => $query->getResult(),
		];

		return view('websia/kontenWebsia/editProfile/editPrestasi.php', $data);
	}

	public function updatePrestasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data = [
			'nama_prestasi'     => $_POST['nama_prestasi'],
			'tahun_prestasi'		=> $_POST['tahun_prestasi'],
			'nim'				=> session('nim'),
		];

		$model->db->table('prestasi')->set($data)->where('id_prestasi', $_POST['id_prestasi'])->update();

		return redirect()->to(base_url('User/editPrestasi'));

	}

	public function addPrestasi()
	{
		if (!session()->has('id_user'))
			return redirect()->to('/');

		$model = new AlumniModel();

		$data = [
			'nama_prestasi'     => $_POST['nama_prestasi'],
			'tahun_prestasi'		=> $_POST['tahun_prestasi'],
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
			'judul'     => $_POST['judul'],
			'topik'     => $_POST['topik'],
			'deskripsi'     => $_POST['deskripsi'],
			'publisher'     => $_POST['publisher'],
			'tanggal_disahkan'     => $_POST['tanggal_disahkan'],
			'author'     => $_POST['author'],
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
		$passlama = $model->getUser(session('id_user'))->getRow()->password_hash;
		$pass = password_hash($_POST['passlama'], PASSWORD_DEFAULT);
		// dd($model->getUser(session('id_user'))->getRow());
		// dd($pass,$passlama);

		// bingung validasinya
		if($pass == $passlama){
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
}
