<?php

namespace App\Controllers;

use Exception;

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
		if (session()->has('id_user')) {
			session()->remove(['id_user', 'username', 'nama', 'role']);
			session()->setFlashdata('pesan', 'Logout berhasil!');
			session()->setFlashdata('warna', 'success');
		}
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

	public function sipadu()	//masuk()
	{
		if (session()->has('id_user'))
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

		$provider = new Provider\Keycloak([
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
			$_SESSION['oauth2state'] = $provider->getState();
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

			// Opsional: Setelah mendapatkan token, anda dapat melihat data profil pengguna
			try {

				$user = $provider->getResourceOwner($token);
				echo "Nama : " . $user->getName();
				echo "E-Mail : " . $user->getEmail();
				echo "Username : " . $user->getUsername();
				echo "NIP : " . $user->getNip();
				echo "NIP Baru : " . $user->getNipBaru();
				echo "Kode Organisasi : " . $user->getKodeOrganisasi();
				echo "Kode Provinsi : " . $user->getKodeProvinsi();
				echo "Kode Kabupaten : " . $user->getKodeKabupaten();
				echo "Alamat Kantor : " . $user->getAlamatKantor();
				echo "Provinsi : " . $user->getProvinsi();
				echo "Kabupaten : " . $user->getKabupaten();
				echo "Golongan : " . $user->getGolongan();
				echo "Jabatan : " . $user->getJabatan();
				echo "Foto : " . $user->getUrlFoto();
				echo "Eselon : " . $user->getEselon();
			} catch (Exception $e) {
				exit('Gagal Mendapatkan Data Pengguna: ' . $e->getMessage());
			}

			// Gunakan token ini untuk berinteraksi dengan API di sisi pengguna
			echo $token->getToken();
		}
	}
}
