<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new UsersModel();
    }

    public function index()
    {
        if (session('username')) return redirect()->to("/Home");
        $data['info'] = "";
        $data['note'] = "";
        if (session('register')) {
            $data['info'] = "<script>alert('Pendaftaran Berhasil')</script>";
            session()->remove('register');
        }
        if (session('error')) $data['note'] = session('error');
        return view('login.php', $data);
    }

    public function verify()
    {
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        if ($this->model->login($data)) {
            if (session('error')) session()->remove('error');
            return redirect()->to("/Home");
        } else {
            session()->set("error", "email atau password salah");
            return redirect()->to("/Login");
        }
    }

    public function registerPage()
    {
        if (session('error1')) {
            $data['error1'] = session('error1');
        } else $data['error1'] = "";
        if (session('error2')) {
            $data['error2'] = session('error2');
        } else $data['error2'] = "";
        if (session('error3')) {
            $data['error3'] = session('error3');
        } else $data['error3'] = "";
        session()->destroy();
        return view('/register.php', $data);
    }

    public function registerVerify()
    {
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        if ($_POST['password'] != $_POST['repassword']) {
            $data['password'] = null;
        } else $data['password'] = $_POST['password'];
        $data['id_role'] = 1;
        if ($this->model->register($data)) {
            session()->set('register', 'success');
            return redirect()->to("/Login");
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        session()->remove('username');
        return redirect()->to('/Login');
    }
}
