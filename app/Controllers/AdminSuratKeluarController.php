<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class AdminSuratKeluarController extends BaseController
{
    public function index()
    {	
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
        $SuratKeluarModel = model("SuratKeluarModel");
		$data = [
			'suratkeluar' => $SuratKeluarModel->findAll()
		];
		return view("suratkeluar/index", $data);
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
        return view ("suratkeluar/create", $data);
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
				"rules" => "required|is_unique[suratkeluar.nomor]",
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
				"label" => "Tujuan",
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

			$SuratKeluarModel = model("SuratKeluarModel");
			$SuratKeluarModel -> insert($data);
			return redirect()->to(base_url('/admin/suratkeluar/'));
		} else {
			return redirect()->to(base_url('/admin/suratkeluar/create'))->withInput()->with('validation', $this->validator);
		}
    }

	public function delete($id)
	{
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }

		$PostModel = model("SuratKeluarModel");
		$PostModel->where('id', $id)->delete();
		return redirect()->to(base_url('/admin/suratkeluar/'));
		
	}

	public function edit($id)
	{	
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }

		session();
		$SuratKeluarModel = model("SuratKeluarModel");
        $data = [
            'validation' => \Config\Services::validation(),
			'suratkeluar' => $SuratKeluarModel->where('id', $id)->first()
        ];
        return view ("suratkeluar/edit", $data);
	}


	public function update($id)
	{
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('login'));
		 }
		$PostModel = model("SuratKeluarModel");
		$data = $this->request->getPost();
		$PostModel->update($id, $data);
		return redirect()->to(base_url('/admin/suratkeluar/'));
	}
}