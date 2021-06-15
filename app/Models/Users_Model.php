<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_Model extends Model
{

    // protected $table = "users";

    public function getProfileId($id)
    {
        $user = $this->db->table('users')
            ->where('users.id', $id)
            ->get()
            ->getRowArray();

        // dd($user);

        if ($user['role'] == 'guru') {
            $result = $this->db->table('users')
                ->where('users.id', $id)
                ->join('guru', 'users.id = guru.id_user')
                ->get()
                ->getRowArray();
        } else {
            $result = $this->db->table('users')
                ->where('users.id', $id)
                ->join('murid', 'users.id = murid.id_user')
                ->get()
                ->getRowArray();
        }

        return $result;
    }

    public function getSubjekByIdGuru($id_guru)
    {
        $result = $this->db->table('guru_subjek')
            ->where('guru_subjek.id_guru', $id_guru)
            ->join('subjek', 'guru_subjek.id_subjek = subjek.id')
            ->get()
            ->getResultArray();

        return $result;
    }

    public function search($key, $lokasi = "kosong")
    {

        if ($lokasi == "") {
            $lokasi = "kosong";
        }
        return $this->db->table('guru')
            ->like('nama', $key)
            ->orLike('lokasi', $lokasi)
            ->get()
            ->getResultArray();
    }
}
