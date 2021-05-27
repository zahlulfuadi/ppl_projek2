<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    public function login($data = null)
    {
        if (!$data) return false;
        //$query = "SELECT username FROM users WHERE email = ? AND password = ?";
        //$result = $this->db->query($query, $data['email'], md5($data['password']))->getRow();
        if ($this->db->table('users')->select('username')->where($data)->get()->getResult()) {
            $result = $this->db->table('users')->select('username')->where($data)->get()->getResult()[0]->username;
            session()->set('username', $result);
            return true;
        } else return false;
    }

    public function register($data = null)
    {
        if (!$data) return false;
        session()->remove('error1');
        session()->remove('error2');
        session()->remove('error3');
        $query = "SELECT username FROM users WHERE username = ?";
        if ($this->db->query($query, $data['username'])->getRow()) session()->set("error1", "<br> Username sudah digunakan");
        $query = "SELECT email FROM users WHERE email = ?";
        if ($this->db->query($query, $data['email'])->getRow()) session()->set("error2", "<br> Email sudah digunakan");
        if (!$data['password']) session()->set("error3", "<br> Tidak sama");

        if (session("error1") || session("error2") || session("error3")) {
            return false;
        } else {
            $this->db->table('users')->insert($data);
            return true;
        }
    }
}
