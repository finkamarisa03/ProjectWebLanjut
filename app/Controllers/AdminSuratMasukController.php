<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class AdminSuratMasukController extends BaseController
{
    public function index()
    {	
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
        $SuratMasukModel = model("SuratMasukModel");
		$data = [
			'suratmasuk' => $SuratMasukModel->findAll()
		];
		return view("suratmasuk/index", $data);
    }

	public function index_nonvalid()
    {	
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
        $SuratMasukUserModel = model("SuratMasukUserModel");
		$data = [
			'suratmasukuser' => $SuratMasukUserModel->findAll()
		];
		return view("suratmasuk/index_nonvalid", $data);
    }

    public function create()
    {
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
        session();
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view ("suratmasuk/create", $data);
    }

    public function store()
    {
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
		$valid = $this->validate([
			"nomor" => [
				"label" => "Nomor",
				"rules" => "required|is_unique[suratmasuk.nomor]",
				"errors" => [
					"required" => "{field} Harus Diisi!",
					"is_unique" => "{filed} sudah ada!"
				]
			],

			"nama" => [
				"label" => "Nama",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!"
				]
			],
			
			"tanggal" => [
				"label" => "Tanggal",
				"rules" => "required",
				"errors" => [
					"{field} Harus Diisi!"
				]
			],
			"tujuan" => [
				"label" => "Tanggal",
				"rules" => "required",
				"errors" => [
					"{field} Harus Diisi!"
				]
			],
			"dok" => [
				"label" => "Berkas",
				"rules" => "required",
				"errors" => [
					"{field} Harus Diisi!"
				]
			]
		]);

		if ($valid) {
			$data = [
				'nomor' => $this->request->getVar('nomor'),
				'nama' => $this->request->getVar('nama'),
				'tanggal' => $this->request->getVar('tanggal'),
				'tujuan' => $this->request->getVar('tujuan'),
				'dok' => $this->request->getVar('dok')
			];

			$SuratMasukModel = model("SuratMasukModel");
			$SuratMasukModel -> insert($data);
			return redirect()->to(base_url('/admin/suratmasuk/'));
		} else {
			return redirect()->to(base_url('/admin/suratmasuk/create'))->withInput()->with('validation', $this->validator);
		}
    }

	public function delete($id)
	{
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
		 
		 
		$PostModel = model("SuratMasukModel");
		$PostModel->where('id', $id)->delete();
		return redirect()->to(base_url('/admin/suratmasuk/'));
		
	}

	public function edit($id)
	{	
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
		session();
		$SuratMasukModel = model("SuratMasukModel");
        $data = [
            'validation' => \Config\Services::validation(),
			'suratmasuk' => $SuratMasukModel->where('id', $id)->first()
        ];
        return view ("suratmasuk/edit", $data);
	}


	public function update($id)
	{
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
		$PostModel = model("SuratMasukModel");
		$data = $this->request->getPost();
		$PostModel->update($id, $data);
		return redirect()->to(base_url('/admin/suratmasuk/'));
	}

	public function delete_nonvalid($id)
	{
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
		$PostModel = model("SuratMasukUserModel");
		$PostModel->where('id', $id)->delete();
		return redirect()->to(base_url('/admin/suratmasuknonvalid/'));
		
	}

	public function validasi_data($id)
    {
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }


		$SuratMasukUserModel = model("SuratMasukUserModel");
		$data1 = [
			'suratmasukuser' => $SuratMasukUserModel->find($id)
		];
		$data = [
				$this->$SuratMasukUserModel->get_where('suratmasukuser',array('id' => $id))
			];
		$SuratMasukModel = model("SuratMasukModel");
		$SuratMasukModel -> insert($data);
		return redirect()->to(base_url('/admin/suratmasuk/'));

	}

	public function store_valid()
    {
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
		$valid = $this->validate([
			"nomor" => [
				"label" => "Nomor",
				"rules" => "required|is_unique[suratmasuk.nomor]",
				"errors" => [
					"required" => "{field} Harus Diisi!",
					"is_unique" => "{filed} sudah ada!"
				]
			],

			"nama" => [
				"label" => "Nama",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!"
				]
			],
			
			"tanggal" => [
				"label" => "Tanggal",
				"rules" => "required",
				"errors" => [
					"{field} Harus Diisi!"
				]
			],
			"tujuan" => [
				"label" => "Tanggal",
				"rules" => "required",
				"errors" => [
					"{field} Harus Diisi!"
				]
				],
				"dok" => [
					"label" => "Berkas",
					"rules" => "required",
					"errors" => [
						"{field} Harus Diisi!"
					]
				]
			
		]);

		if ($valid) {
			$data = [
				'nomor' => $this->request->getVar('nomor'),
				'nama' => $this->request->getVar('nama'),
				'tanggal' => $this->request->getVar('tanggal'),
				'tujuan' => $this->request->getVar('tujuan'),
				'dok' => $this->request->getVar('dok')
			];
			$id_suratuser = [
				'id' => $this->request->getVar('id')
			];
			$SuratMasukModel = model("SuratMasukModel");
			$SuratMasukModel -> insert($data);
			$SuratMasukUserModel = model("SuratMasukUserModel");
			$SuratMasukUserModel -> where('id',$id_suratuser['id']) ->delete();
			return redirect()->to(base_url('/admin/suratmasuk/'));
		} else {
			return redirect()->to(base_url('/admin/suratmasuk/create'))->withInput()->with('validation', $this->validator);
		}
    }
}