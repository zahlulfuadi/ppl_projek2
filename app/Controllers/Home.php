<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('landing_page/landing_page');
	}
}
