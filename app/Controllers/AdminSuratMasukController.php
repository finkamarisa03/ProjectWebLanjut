<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class AdminSuratMasukController extends BaseController
{
    public function index()
    {
        $SuratMasukModel = model("SuratMasukModel");
		$data = [
			'suratmasuk' => $SuratMasukModel->findAll()
		];
		return view("suratmasuk/index", $data);
    }

    public function create()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view ("suratmasuk/create", $data);
    }

    public function store()
    {
		
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
		$PostModel = model("SuratMasukModel");
		$PostModel->where('id', $id)->delete();
		return redirect()->to(base_url('/admin/suratmasuk/'));
		
	}

	public function edit($id)
	{
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
		$PostModel = model("SuratMasukModel");
		$data = $this->request->getPost();
		$PostModel->update($id, $data);
		return redirect()->to(base_url('/admin/suratmasuk/'));
	}
}