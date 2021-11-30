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
	   $SuratKeluarModel = model("SuratKeluarModel");
		$data = [
			'suratmasuk' => $SuratMasukModel->findAll(),
			'suratkeluar' => $SuratKeluarModel->findAll()
		];
		
    return view('view_admin', $data);
   }

   //--------------------------------------------------------------------

}