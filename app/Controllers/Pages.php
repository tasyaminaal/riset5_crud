<?php namespace App\Controllers;

use App\Models\UserModel;

class Pages extends BaseController
{
	protected $userModel;

	public function __construct()
	{
		$this->userModel = new UserModel();
	}
	public function index()
	{
        $data = [
            'title' => 'Dashboard | Riset 5 Website Alumni',
		];
		return view('pages/dashboard', $data);
	}

	//--------------------------------------------------------------------


	public function login()
	{
        $data = [
            'title' => 'Login | Riset 5 Website Alumni',
		];
		return view('pages/login', $data);
	}

	//--------------------------------------------------------------------


	public function userInfo()
	{
		$info = $this->userModel->where(['nama'=> 'mochi'])->first(); //ini bakal diganti sama indentify si user yang login
        $data = [
			'title' => 'Profile | Riset 5 Website Alumni',
			'nama' 		=> $info['nama'],
			'nim' 		=> $info['nim'],
			'angkatan'	=> $info['angkatan'],
		];

		return view('pages/userinfo', $data);
	}

	//--------------------------------------------------------------------

}
