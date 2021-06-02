<?php

namespace App\Controllers;

use \Codeigniter\Controller;
use App\Models\Users_Model;

class Profile extends BaseController
{

	public function __construct()
	{

		// Mendeklarasikan class Users_Model menggunakan $this->product
		$this->profile = new Users_Model();
		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Profile 
        */
	}


	public function index()
	{
		$data['title'] = 'Profile';
		$data['profile'] = $this->profile->getProfile($id = 5, $role = 'guru');
		$data['daftar_subjek'] = $this->profile->getSubjekByIdGuru($id_guru = 5);
		// dd($data);

		return view('profile/index', $data);
	}
	public function dashboard()
	{
		$data['title'] = 'Dashboard';
		return view('landing_page/landing_page_after_login', $data);
	}
	public function search()
	{
		$data['title'] = 'Search';
		return view('search/search', $data);
	}
	public function register()
	{
		$data['title'] = 'Register';
		return view('login/register', $data);
	}
	public function chooseUser()
	{
		$data['title'] = 'Login';
		return view('login/choose_user', $data);
	}
	public function login()
	{
		$data['title'] = 'Login';
		return view('login/login', $data);
	}
	public function profilGuru()
	{
		// return view('welcome_message');
		return view('profile/teacher_profile');
	}
	public function myProfile()
	{
		// return view('welcome_message');
		return view('profile/my_profile');
		return view('profile/my_profile');
	}
	public function editProfile()
	{
		// return view('welcome_message');
		return view('profile/edit_profile');
	}
	public function searchResult()
	{
		// return view('welcome_message');
		return view('search/search_results');
	}
}
