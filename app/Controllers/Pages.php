<?php namespace App\Controllers;

class Pages extends BaseController
{
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
        $data = [
            'title' => 'Profile | Riset 5 Website Alumni',
		];
		return view('pages/userinfo', $data);
	}

	//--------------------------------------------------------------------

}
