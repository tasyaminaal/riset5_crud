<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Webservice extends Seeder
{
	public function run()
	{
		$data = [
			[
				'scope'       	  => 'user:profile:read',
				'scope_dev'       => 'Mengakses informasi pribadi dasar pengguna',
			],
			[
				'scope'       	  => 'alumni:profile:read',
				'scope_dev'       => 'Mengakses informasi pribadi dasar alumni atas nama pengguna',
			],
			[
				'scope'       	  => 'alumni:profile:list',
				'scope_dev'       => 'Mengakses informasi pribadi dasar alumni atas nama pengguna',
			]
		];
		$this->db->table('scope_app')->insertBatch($data);
	}
}
