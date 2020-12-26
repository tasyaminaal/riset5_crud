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
}
