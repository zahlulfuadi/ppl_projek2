<?php

namespace App\Controllers;

use App\Models\Users_Model;

class Administration extends BaseController
{
    public function __construct()
    {
        // parent::__construct(); // ini harus pake controller CIController
        $this->model = new Users_Model();
        // $this->load->model('Users_Modal');
    }

    public function register()
    {
        if (session('username'))
            return redirect()->to("/Home");
        $data['title'] = "Register";
        $data['info'] = "";
        if (session('register')) {
            $data['info'] = "<script>alert('Pendaftaran Berhasil')</script>";
            session()->remove('register');
        }
        if (session('error'))
            $data['note'] = session('error');

        return view('login/register', $data);
        //         $this->load->view('admin/v_login',$x);
    }

    public function chooseUser()
    {
        if (session('username')) return redirect()->to("/Home");
        $data['title'] = "Login";
        $data['note'] = "";
        if (session('register')) {
            $data['info'] = "<script>alert('Pendaftaran Berhasil')</script>";
            session()->remove('register');
        }
        if (session('error')) $data['note'] = session('error');
        return view('login.php', $data);
        //         $this->load->view('admin/v_login',$x);
    }

    public function index2()
    {
        if (session('username')) return redirect()->to("/Home");
        $data['title'] = "Login";
        $data['note'] = "";
        if (session('register')) {
            $data['info'] = "<script>alert('Pendaftaran Berhasil')</script>";
            session()->remove('register');
        }
        if (session('error')) $data['note'] = session('error');
        return view('login.php', $data);
        //         $this->load->view('admin/v_login',$x);
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



// <?php
// class Administrator extends CI_Controller{
//     function __construct(){
//         parent:: __construct();
//         $this->load->model('mlogin');
//     }
//     function index(){
//         $x['judul']="Silahkan Masuk..!";
//         $this->load->view('admin/v_login',$x);
//     }
//     function cekuser(){
//         $username=strip_tags(stripslashes($this->input->post('username',TRUE)));
//         $password=strip_tags(stripslashes($this->input->post('password',TRUE)));
//         $u=$username;
//         $p=$password;
//         $cadmin=$this->mlogin->cekadmin($u,$p);
//         if($cadmin->num_rows > 0){
//          $this->session->set_userdata('masuk',true);
//          $this->session->set_userdata('user',$u);
//          $xcadmin=$cadmin->row_array();
//          if($xcadmin['user_level']=='1')
//             $this->session->set_userdata('akses','1');
//             $idadmin=$xcadmin['user_id'];
//             $user_nama=$xcadmin['user_nama'];
//             $this->session->set_userdata('idadmin',$idadmin);
//             $this->session->set_userdata('nama',$user_nama);
//          if($xcadmin['user_level']=='2'){
//              $this->session->set_userdata('akses','2');
//              $idadmin=$xcadmin['user_id'];
//              $user_nama=$xcadmin['user_nama'];
//              $this->session->set_userdata('idadmin',$idadmin);
//              $this->session->set_userdata('nama',$user_nama);
//          } //Front Office
           
         
         
//         }
        
//         if($this->session->userdata('masuk')==true){
//             redirect('administrator/berhasillogin');
//         }else{
//             redirect('administrator/gagallogin');
//         }
//     }
//         function berhasillogin(){
//             redirect('welcome');
//         }
//         function gagallogin(){
//             $url=base_url('administrator');
//             echo $this->session->set_flashdata('msg','Username Atau Password Salah');
//             redirect($url);
//         }
//         function logout(){
//             $this->session->sess_destroy();
//             $url=base_url('administrator');
//             redirect($url);
//         }
// }