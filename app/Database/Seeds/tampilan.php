<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tampilan extends Seeder
{
	public function run()
	{
		$model = new \App\Models\AlumniModel();
		$alumni = $model->get()->getResult();
		foreach ($alumni as $row) {
			$data = [
				'id_alumni'     => $row->id_alumni,
			];
			$this->db->table('tampilan')->insert($data);
		}
	}
}
