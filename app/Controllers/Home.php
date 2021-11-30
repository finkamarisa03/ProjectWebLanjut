<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Home - SI Arus Surat"
		];
		return view('/home/index');
	}
}
