<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasukUserModel extends Model
{
	protected $table                = 'suratmasukuser';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nomor','nama','tanggal','tujuan','dok'];
	
}
