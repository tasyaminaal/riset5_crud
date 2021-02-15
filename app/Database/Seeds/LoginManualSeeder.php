<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LoginManualSeeder extends Seeder
{
	public function run()
	{
		$now = date("Y-m-d H:i:s");
		$data = [
			'email'				=> 'dummy@stis.ac.id',
			'username'			=> 'Dummy',
			'nim'				=> '221810160',
			'fullname'			=> 'Dummy_dummy',
			'password_hash'		=> '$2y$10$yLFu3bK0s5cHqd1VLT6Eh.GjA3H2GJzwqb6o/gjrhKXTWGkMsh3IS',
			//password pororodeh123
			'reset_at'			=> $now,
			'active'			=> 1,
			'force_pass_reset'	=> 0,
			'created_at'		=> $now,
			'updated_at'		=> $now
		];
		$this->db->table('users')->insert($data);
	}
}
