<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['id', 'nama', 'email', 'nip'];


    public function getAll()
    {
        return $this->db->table('user')->get()->getResultArray();
    }

    public function jumlahUser()
    {
        return $this->db->table('user')->select('*')->countAllResults();
    }

    public function hapusUser($nip)
    {
        $this->db->table('user')->delete(['nip' => $nip]);
    }

    public function insertUser($data)
    {
        $this->db->table('user')->insert($data);
    }

    public function getUserByNIP($nip)
    {
        return $this->builder()->where('nip', $nip)->get()->getFirstRow('array');
    }

    public function getUserByEmail($email)
    {
        return $this->builder()->where('email', $email)->get()->getFirstRow('array');
    }
}
