<?php

namespace App\Controllers;

use \Codeigniter\Controller;
use App\Models\Users_Model;
// use Myth\Auth\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data['title'] = 'Home';
		return view('landing_page/landing_page', $data);
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
