<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'auth';
    protected $allowedFields = ['id', 'username', 'nama', 'role'];


    public function getAll()
    {
        return $this->db->table('auth')->get()->getResultArray();
    }

    public function jumlahUser()
    {
        return $this->db->table('auth')->select('*')->countAllResults();
    }

    public function hapusUser($username)
    {
        $this->db->table('auth')->delete(['username' => $username]);
    }

    public function insertUser($data)
    {
        $this->db->table('auth')->insert($data);
    }

    public function getUserByNama($nama)
    {
        return $this->builder()->where('nama', $nama)->get()->getFirstRow('array');
    }

    public function getUserByUsername($username)
    {
        return $this->builder()->where('username', $username)->get()->getFirstRow('array');
    }
}
