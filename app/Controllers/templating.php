<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class templating extends BaseController
{
	public function __construct()
	{
		$this->userModel = new UserModel();
	}

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

	public function admin()
	{
	$data = [
		'title' => "Admin"
	];
	// echo view ('layouts/header', $data);
	// echo view ('layouts/navbar');
    // echo view ('v_posts');

	// echo view ('layouts/footer');
	
	$SuratMasukModel = model("SuratMasukModel");
	$SuratKeluarModel = model("SuratKeluarModel");
		$data = [
				'suratmasuk' => $SuratMasukModel->findAll(),
				'suratkeluar' => $SuratKeluarModel->findAll()
		];

    // echo view ('layouts/footer');

	$SuratMasukModel = model("SuratMasukModel");
	$SuratKeluarModel = model("SuratKeluarModel");
		$data = [
			'suratmasuk' => $SuratMasukModel->findAll(),
			'suratkeluar' => $SuratKeluarModel->findAll()
		];
		
    return view('view_admin', $data);
	}

	public function register()
	{
	$data = [
		'title' => "Register"
	];
	// echo view ('layouts/header', $data);
	// echo view ('layouts/navbar');
    // echo view ('v_posts');
    // echo view ('layouts/footer');
    return view('v_regis', $data);
	}

	public function saveRegister()
	{
	 $request = service('request');
	 $data = [
		 'fullname' => $request->getVar('fullname'),
		 'email' => $request->getVar('email'),
		 'password' => $request->getVar('Password'),
	 ];
     $this->userModel->insert($data);
	 return redirect()->to('/register');
	}


}