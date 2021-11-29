<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class AdminSuratKeluarController extends BaseController
{
    public function index()
    {
        $SuratKeluarModel = model("SuratKeluarModel");
		$data = [
			'suratkeluar' => $SuratKeluarModel->findAll()
		];
		return view("suratkeluar/index", $data);
    }

    public function create()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view ("suratkeluar/create", $data);
    }

	public function store()
    {
		
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
				"label" => "Tanggal",
				"rules" => "required",
				"errors" => [
					"{field} Harus Diisi!"
				]
			],
			
		]);

		if ($valid) {
			$data = [
				'nomor' => $this->request->getVar('nomor'),
				'nama' => $this->request->getVar('nama'),
				'tanggal' => $this->request->getVar('tanggal'),
				'tujuan' => $this->request->getVar('tujuan'),
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
		$PostModel = model("SuratKeluarModel");
		$PostModel->where('id', $id)->delete();
		return redirect()->to(base_url('/admin/suratkeluar/'));
		
	}

	public function edit($id)
	{
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
		$PostModel = model("SuratKeluarModel");
		$data = $this->request->getPost();
		$PostModel->update($id, $data);
		return redirect()->to(base_url('/admin/suratkeluar/'));
	}
}