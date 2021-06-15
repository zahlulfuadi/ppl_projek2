<?php

namespace App\Controllers;

use \Codeigniter\Controller;
use App\Models\Users_Model;
use App\Models\Subjek_Model;

class Profile extends BaseController
{

	public function __construct()
	{

		// Mendeklarasikan kelas model
		$this->profile = new Users_Model();
		$this->subjek = new Subjek_Model();

		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Profile 
        */
	}

	public function index()
	{
		$user_id = $_SESSION['logged_in'];

		$data['title'] = 'Profile';
		$data['profile'] = $this->profile->getProfileId($user_id);
		$data['daftar_subjek'] = $this->subjek->getSubjekByIdGuru($user_id);
		$data['detail_mapel'] = $this->subjek->detailMapelByIdGuru($user_id);
		$data['detail_tingkat'] = $this->subjek->getTingkatByIdGuru($user_id);
		// dd($data);

		return view('profile/index', $data);
	}
	public function editProfile()
	{
		$data['title'] = 'Edit Profile';

		// Mengambil value dari form dengan method POST
		$fullname = $this->request->getPost('fullname');
		$email = $this->request->getPost('email');
		$lokasi = $this->request->getPost('lokasi');
		$desc = $this->request->getPost('deskripsi_diri');

		// Membuat array collection yang disiapkan untuk insert ke table
		$data = [
			'fullname' => $fullname,
			'email' => $email,
			'lokasi' => $lokasi,
			'deskripsi' => $desc
		];

		/* 
Membuat variabel ubah yang isinya merupakan memanggil function 
update_product dan membawa parameter data beserta id
*/
		$ubah = $this->product->update_product($data, $id);

		// Jika berhasil melakukan ubah
		if ($ubah) {
			// Deklarasikan session flashdata dengan tipe info
			session()->setFlashdata('info', 'Updated product successfully');
			// Redirect ke halaman product
			return redirect()->to(base_url('product'));
		}
		return view('profile/edit_profile', $data);
	}

	public function editSubjek()
	{
		$data['title'] = 'Edit Subjek';
		return view('profile/edit_subjek', $data);
	}

	public function search()
	{
		$data['title'] = 'Search';
		return view('search/search', $data);
	}
	public function profilGuru()
	{
		// return view('welcome_message');
		return view('profile/teacher_profile');
	}
	public function searchResult()
	{
		// return view('welcome_message');
		return view('search/search_results');
	}
}
