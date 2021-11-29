<?php

namespace App\Controllers;

class admin extends BaseController
{
   public function index()
   {
      if (session()->get('email') == '') {
         session()->setFlashdata('gagal', 'Anda belum login');
         return redirect()->to(base_url('login'));
      }
      return view('admin_view');
   }

   //--------------------------------------------------------------------

}