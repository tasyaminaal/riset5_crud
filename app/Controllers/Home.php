<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		// processing data sipadu
		if (isset($_REQUEST['code']) && $_REQUEST['code']) {

			$this->modelAuth = new \App\Models\AuthModel();

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


	public function userInfo()
	{
		$data = [
			'title' => 'Profile | Riset 5 Website Alumni',
		];

		return view('pages/userinfo', $data);
	}

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
	//--------------------------------------------------------------------

}
