<?php

namespace App\Controllers;

class Home extends BaseController
{

	// function __construct(){
	// 	parent::__construct();
	// 	if($this->session->userdata('masuk') !=TRUE){
	//         $url=base_url();
	//         redirect($url);
	//     };
	// }


	public function index()
	{
		// return view('welcome_message');
		return view('landing_page/landing_page');
	}
	public function index2()
	{
		// return view('welcome_message');
		return view('landing_page/landing_page_after_login');
	}
	public function search()
	{
		// return view('welcome_message');
		return view('search/search');
	}
	public function register()
	{
		// return view('welcome_message');
		return view('login/register');
	}
	public function chooseUser()
	{
		// return view('welcome_message');
		return view('login/choose_user');
	}
	public function login()
	{
		// return view('welcome_message');
		return view('login/login');
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
