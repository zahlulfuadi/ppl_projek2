<?php

namespace App\Controllers;

class Home extends BaseController
{
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
	public function cari()
	{
		// return view('welcome_message');
		return view('search/search');
	}
	public function register()
	{
		// return view('welcome_message');
		return view('login/register');
	}
	public function login()
	{
		// return view('welcome_message');
		return view('login/login');
	}
	public function login2()
	{
		// return view('welcome_message');
		return view('login/login2');
	}
}
