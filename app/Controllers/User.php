<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index() //user detail + form update
	{
		$data = [
			'title' => 'User | Riset 5 Website Alumni',
		];
		$users = new \Myth\Auth\Models\UserModel();
		$data['users'] = $users->findAll();

		return view('pages/user', $data);
	}

	//--------------------------------------------------------------------

	public function filter() //hasil pencarian
	{
	}

	//--------------------------------------------------------------------


	public function update()
	{
	}

	//--------------------------------------------------------------------

}
