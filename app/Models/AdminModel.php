<?php namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
	public function get_data($email, $password)
	{
      return $this->db->table('admin')
      ->where(array('email' => $email, 'password' => $password))
      ->get()->getRowArray();
	}

	//--------------------------------------------------------------------

}