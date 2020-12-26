<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{

    protected $table = 'alumni';

    public function pencarian($kunci)
    {
        return $this->table('alumni')->like('nama', $kunci);
    }
    
    public function bukaProfile($kunci) {
        return $this->table('alumni')->getWhere(['nim' => $kunci]);
    }

    public function getUserByNIM($nim) {
        return $this->builder()->where('nim', $nim)->get()->getFirstRow('array');
    }
}
