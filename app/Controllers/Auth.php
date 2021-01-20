<?php

namespace App\Controllers;

use Exception;
use \JKD\SSO\Client\Provider\Keycloak;

class Auth extends BaseController
{
	public function index() //login
	{
	}

	//--------------------------------------------------------------------

	public function reg() //registrasi
	{
	}

	//--------------------------------------------------------------------


	public function forgot() //lupa pasword
	{
	}

	//--------------------------------------------------------------------


	public function aktivasi() //aktivasi akun dari registrasi
	{
	}

	//--------------------------------------------------------------------

	public function logout()
	{
		$provider = new Keycloak([
			'authServerUrl'         => 'https://sso.bps.go.id',
			'realm'                 => 'pegawai-bps',
			'clientId'              => '02700-dbalumni-mu1',
			'clientSecret'          => 'e69810d0-f915-49c4-9ed1-cd9edf05436a',
			'redirectUri'           => 'http://localhost:8080',
			'scope' 				=> 'openid profile-pegawai'
		]);

		// logout sipadu
		if (session()->has('nim')) {
			session()->remove(['nim', 'nama', 'role']);
			session()->setFlashdata('pesan', 'Logout berhasil!');
			session()->setFlashdata('warna', 'success');

			//logout bps
			if (session('oauth2state')) {
				$url_logout = $provider->getLogoutUrl();
				return redirect()->to($url_logout);
			}

			if (logged_in()) {
				//logout manual
				return redirect()->to('/logout');
			}
		}
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

	public function sipadu()	//masuk()
	{
		if (session()->has('nim'))
			return redirect()->back();

		$query = http_build_query([
			'client_id' => "14",
			'redirect_uri' => 'http://localhost:8080',
			'response_type' => 'code', //gak usah diubah
			'scope' => 'user:profile:read'
		]);

		return redirect()->to('https://ws.stis.ac.id/oauth/authorize?' . $query);
	}


	public function bps()	//masuk()
	{
		$provider = new Keycloak([
			'authServerUrl'         => 'https://sso.bps.go.id',
			'realm'                 => 'pegawai-bps',
			'clientId'              => '02700-dbalumni-mu1',
			'clientSecret'          => 'e69810d0-f915-49c4-9ed1-cd9edf05436a',
			'redirectUri'           => 'http://localhost:8080',
			'scope' 				=> 'openid profile-pegawai'
		]);

		if (!isset($_GET['code'])) {

			// Untuk mendapatkan authorization code
			$authUrl = $provider->getAuthorizationUrl();
			session()->set(['oauth2state' => $provider->getState()]);
			// $_SESSION['oauth2state'] = $provider->getState();
			header('Location: ' . $authUrl);
			exit;

			// Mengecek state yang disimpan saat ini untuk memitigasi serangan CSRF
		} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

			unset($_SESSION['oauth2state']);
			exit('Invalid state');
		} else {

			try {
				$token = $provider->getAccessToken('authorization_code', [
					'code' => $_GET['code']
				]);
			} catch (Exception $e) {
				exit('Gagal mendapatkan akses token : ' . $e->getMessage());
			}

			// proses login
			try {
				$this->modelAuth = new \App\Models\UserModel();

				$user = $provider->getResourceOwner($token);
				if ($this->modelAuth->getUserByNIP($user->getNIP()) == NULL) {
					$data = [
						'nama' 	=> $user->getName(),
						'nip' 	=> $user->getNip(),
						'email'	=> $user->getEmail(),
					];

					$this->modelAuth->insertUser($data);

					$info = $this->modelAuth->getUserByNIP($user->getNIP());

					session()->set([
						'id_user' 	=> $info['id'],
						'nama' 		=> $info['nama'],
						'nip' 		=> $info['nip'],
						'email' 	=> $info['email'],
					]);
				} elseif ($this->modelAuth->getUserByEmail($user->getEmail()) == NULL) {
					$data = [
						'nama' 	=> $user->getName(),
						'nip' 	=> $user->getNip(),
						'email'	=> $user->getEmail(),
					];

					$this->modelAuth->insertUser($data);

					$info = $this->modelAuth->getUserByNIP($user->getNIP());

					session()->set([
						'id_user' 	=> $info['id'],
						'nama' 		=> $info['nama'],
						'nip' 		=> $info['nip'],
						'email' 	=> $info['email'],
					]);
				}

				setcookie('login', 'yes', time() + 60, $_SERVER['SERVER_NAME']);

				echo '<script>window.close();</script>';

				session()->setFlashdata('pesan', 'Login berhasil. Hai, <b>' . session('nama') . '!</b>');
				session()->setFlashdata('warna', 'success');
				die();
				// $data = [
				// 	'title' => 'Profile | Riset 5 Website Alumni',
				// 	'nama' => $user->getName(),
				// 	'email' => $user->getEmail(),
				// 	'username' => $user->getUsername(),
				// 	'nip' => $user->getNip(),
				// 	'nipBaru' => $user->getNipBaru(),
				// 	'kodeOrganisasi' => $user->getKodeOrganisasi(),
				// 	'kodeProvinsi' => $user->getKodeProvinsi(),
				// 	'kodeKabupaten' => $user->getKodeKabupaten(),
				// 	'alamatKantor' => $user->getAlamatKantor(),
				// 	'provinsi' => $user->getProvinsi(),
				// 	'kabupaten' => $user->getKabupaten(),
				// 	'golongan' => $user->getGolongan(),
				// 	'jabatan' => $user->getJabatan(),
				// 	'foto' => $user->getUrlFoto(),
				// 	'eselon' => $user->getEselon(),
				// ];

				// return view('pages/UserInfo', $data);
			} catch (Exception $e) {
				exit('Gagal Mendapatkan Data Pengguna: ' . $e->getMessage());
			}

			// Gunakan token ini untuk berinteraksi dengan API di sisi pengguna
			echo $token->getToken();
		}
	}
}
