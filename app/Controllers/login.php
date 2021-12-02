<?php namespace App\Controllers;

use App\Models\AdminModel;

class login extends BaseController
{
	public function index()
	{
		return view('login/admin_form');
   }
   
   public function login_action() 
   {
      $adminmodel = new AdminModel();

      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');

      $cek = $adminmodel->get_data($email, $password);
      
      if($cek != null){
        if (($cek['email'] == $email) && ($cek['password'] == $password))
        {
           session()->set('email', $cek['email']);
           session()->set('password', $cek['password']);
           return redirect()->to(base_url('admin'));
        } else {
           session()->setFlashdata('gagal', 'Email / Password salah');
           return redirect()->to(base_url('login'));
        }
    }else{
        session()->setFlashdata('gagal', 'Email / Password salah');
        return redirect()->to(base_url('login'));
   }
}
   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('login'));
   }

	//--------------------------------------------------------------------

}