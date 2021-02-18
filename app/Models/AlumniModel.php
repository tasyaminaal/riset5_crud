<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{

    protected $table = 'alumni';

    public function bukaProfile($kunci)
    {
        return $this->table('alumni')->getWhere(['nim' => $kunci]);
    }

    public function getUserByNIM($nim)
    {
        return $this->builder()->where('nim', $nim)->get()->getFirstRow('array');
    }

    public function getSearch($field, $search)
    {
        return $this->table('alumni')->like($field, $search);
    }

    public function getAlumniFilter($cari, $min_angkatan, $max_angkatan)
    {
        $query = $this->table('alumni');
        if (isset($cari) && !empty($cari)) {
            // $subquery = $query->like('nama', $cari)
            // ->orLike('nim', $cari)
            // ->orLike('angkatan', $cari)
            // ->orLike('jenis_kelamin', $cari)
            // ->orLike('tempat_lahir', $cari)
            // ->orLike('tanggal_lahir', $cari)
            // ->orLike('jenis_kelamin', $cari)
            // ->orLike('telp_alumni', $cari)
            // ->orLike('alamat', $cari)
            // ->orLike('status_bekerja', $cari)
            // ->orLike('perkiraan_pensiun', $cari)
            // ->orLike('jabatan_terakhir', $cari)
            // ->orLike('aktif_pns', $cari)
            // ->getCompiledSelect();
            $subquery = "(nim LIKE '%$cari%' 
            OR nama LIKE '%$cari%' 
            OR jenis_kelamin LIKE '%$cari%' 
            OR tanggal_lahir LIKE '%$cari%' 
            OR jenis_kelamin LIKE '%$cari%' 
            OR telp_alumni LIKE '%$cari%' 
            OR alamat LIKE '%$cari%' 
            OR status_bekerja LIKE '%$cari%' 
            OR perkiraan_pensiun LIKE '%$cari%' 
            OR jabatan_terakhir LIKE '%$cari%' 
            OR aktif_pns LIKE '%$cari%')";
            if (isset($min_angkatan) && isset($max_angkatan)) {
                $where = "Angkatan BETWEEN $min_angkatan AND $max_angkatan";
                $query = $query
                    ->where($subquery)
                    ->where($where);
            }
        }
        if (isset($min_angkatan) && isset($max_angkatan)) {
            $where = "Angkatan BETWEEN $min_angkatan AND $max_angkatan";
            $query = $query
                ->where($where);
        }
        return $query;
    }

    public function getMaxAngkatan()
    {
        return $this->table('alumni')->selectMax('angkatan')->get()->getResult();
    }

    public function getMinAngkatan()
    {
        return $this->table('alumni')->selectMin('angkatan')->get()->getResult();
    }

    public function getTempatKerjaByNIM($nim)
    {
        $query = "select tempat_kerja.id_tempat_kerja, 
        tempat_kerja.nama_instansi,
        tempat_kerja.alamat_instansi,
        tempat_kerja.telp_instansi,
        tempat_kerja.faks_instansi,
        tempat_kerja.email_instansi,
        alumni_tempat_kerja.nim, 
        alumni_tempat_kerja.id_tempat_kerja 
        FROM tempat_kerja, alumni_tempat_kerja 
        WHERE 
        tempat_kerja.id_tempat_kerja = alumni_tempat_kerja.id_tempat_kerja 
        AND alumni_tempat_kerja.nim = '$nim'";
        return $this->db->query($query);
    }

    public function getRole($user_id)
    {
        $query = "select name from auth_groups_users JOIN auth_groups ON group_id=id Where auth_groups_users.user_id = $user_id";
        return $this->db->query($query);
    }

    public function getIdPublikasi()
    {
        $query = "SELECT id_publikasi FROM publikasi";
        return $this->db->query($query);
    }
    
    public function getPendidikanByNIM($nim)
    {
        $query = "SELECT * FROM pendidikan WHERE nim = $nim";
        $query = "SELECT * FROM pendidikan JOIN pendidikan_tinggi ON pendidikan.id_pendidikan=pendidikan_tinggi.id_pendidikan WHERE pendidikan.nim = $nim";
        return $this->db->query($query);
    }

    public function getCountPendidikanByNIM($nim)
    {
        $query = "SELECT COUNT(*) FROM pendidikan WHERE nim = $nim";
        return $this->db->query($query);
    }

    public function getPrestasiByNIM($nim)
    {
        $query = "SELECT * FROM prestasi WHERE nim = $nim";
        return $this->db->query($query);
    }

    public function getCountPrestasiByNIM($nim)
    {
        $query = "SELECT COUNT(*) FROM prestasi WHERE nim = $nim";
        return $this->db->query($query);
    }

    public function getPublikasiByNIM($nim)
    {
        $query = "SELECT * FROM alumni_publikasi JOIN publikasi ON alumni_publikasi.id_publikasi=publikasi.id_publikasi WHERE alumni_publikasi.nim = $nim";
        return $this->db->query($query);
    }

    public function getCountPublikasiByNIM($nim)
    {
        $query = "SELECT COUNT(*) FROM alumni_publikasi JOIN publikasi ON alumni_publikasi.id_publikasi=publikasi.id_publikasi WHERE alumni_publikasi.nim = $nim";
        return $this->db->query($query);
    }

    public function getUsersById($id)
    {
        $query = "SELECT * FROM users WHERE id = $id";
        return $this->db->query($query);
    }

    public function getUsersByNIM($nim)
    {
        $query = "SELECT * FROM users WHERE nim = $nim";
        return $this->db->query($query);
    }

    public function getAlumniByAngkatan($angkatan)
    {
        return $this->table('alumni')->Where('angkatan', $angkatan);
    }
}
