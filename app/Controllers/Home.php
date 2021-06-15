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
	public function profilGuru()
	{
		$data['title'] = 'Profil Guru';
		return view('profile/teacher_profile', $data);
	}
	public function searchResult()
	{
		$pager = \Config\Services::pager();
		$model = new Users_Model();
		$key = $this->request->getVar('key');
		$lokasi = $this->request->getVar('lokasi');

		if ($key) {
			$query = $model->search($key, $lokasi);
			// $jumlah = "Pencarian dengan kata kunci <B>$key</B> ditemukan " . $query->affectedRows() . " Data";
			$jumlah = "";
		} else {
			$query = $model;
			$jumlah = "";
		}

		$data['title'] = "Hasil Pencarian";
		$data['guru'] = $query;
		// $data['guru'] = $query->paginate(10);
		// $data['pager'] = $model->pager;
		// $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
		$data['jumlah'] = $jumlah;
		// dd($data);
		return view('search/search_results', $data);
	}
}
