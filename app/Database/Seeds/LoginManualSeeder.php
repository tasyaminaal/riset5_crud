<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class LoginManualSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'email'				=> 'elanuzul4@gmail.com',
			'username'			=> '421044167',
			//'nim'				=> 
			'password_hash'		=> '$2y$10$yLFu3bK0s5cHqd1VLT6Eh.GjA3H2GJzwqb6o/gjrhKXTWGkMsh3IS',
			'reset_at'			=> Time::now(),
			'active'			=> 1,
			'force_pass_reset'	=> 0,
			'created_at'		=> Time::now(),
			'updated_at'		=> Time::now()
		];
		$this->db->table('users')->insert($data);
	}
}
