<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Home - SI Arus Surat"
		];
		// echo view ('layouts/header', $data);
		// echo view ('layouts/navbar');
		// echo view ('v_posts');
		// echo view ('layouts/footer');
		return view('/home/index');
	}
}
