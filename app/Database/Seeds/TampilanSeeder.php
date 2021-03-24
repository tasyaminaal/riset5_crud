<?php

namespace App\Database\Seeds;

class TampilanSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $model = new \App\Models\AlumniModel();
                $alumni = $model->get()->getResult();
                foreach ($alumni as $row) {
                        $data = [
                                'nim'             => $row->nim,
                        ];
                        $this->db->table('tampilan')->insert($data);
                }
    }
}