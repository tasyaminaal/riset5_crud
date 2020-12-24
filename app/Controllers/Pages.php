<!-- tidak digunakan -->

<!-- <php

namespace App\Controllers;

// use App\Models\UserModel;

class Pages extends BaseController
{
	// protected $userModel;

	// public function __construct()
	// {
	// 	$this->userModel = new UserModel();
	// }

	public function index()
	{
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

		$data = [
			'title' => 'Dashboard | Riset 5 Website Alumni',
		];
		return view('pages/dashboard', $data);
	}

	//--------------------------------------------------------------------


	public function login()
	{
		$data = [
			'title' 	=> 'Login | Riset 5 Website Alumni',
			'template'	=> 'login',
		];
		return view('login/login', $data);
	}

	//--------------------------------------------------------------------


	public function userInfo()
	{
		$data = [
			'title' => 'Profile | Riset 5 Website Alumni',
		];

		return view('pages/userinfo', $data);
	}

	//--------------------------------------------------------------------

} -->