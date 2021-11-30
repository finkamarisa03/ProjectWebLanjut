<?php

namespace App\Controllers;

class AdminController extends BaseController
{
   public function index()
   {
      if (session()->get('email') == '') {
         session()->setFlashdata('gagal', 'Anda belum login');
         return redirect()->to(base_url('login'));
      }
      $SuratMasukModel = model("SuratMasukModel");
      $SuratMasukUserModel = model("SuratMasukUserModel");
	   $SuratKeluarModel = model("SuratKeluarModel");
		$data = [
			'suratmasuk' => $SuratMasukModel->findAll(),
			'suratkeluar' => $SuratKeluarModel->findAll(),
         'suratmasukuser' => $SuratMasukUserModel->findAll()
		];
		
    return view('view_admin', $data);
   }

   //--------------------------------------------------------------------

}