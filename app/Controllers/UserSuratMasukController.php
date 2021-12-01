<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class UserSuratMasukController extends BaseController
{
    public function index()
    {	
		
        $SuratMasukUserModel = model("SuratMasukUserModel");
		$SuratMasukModel = model("SuratMasuKModel");
		$data = [
			'suratmasukuser' => $SuratMasukUserModel->findAll(),
			'suratmasuk' => $SuratMasukModel->findAll()
		];
		return view("/home/suratmasukuser/index", $data);
    }

    public function create()
    {
		
        session();
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view ("home/suratmasukuser/create", $data);
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

			$SuratMasukUserModel = model("SuratMasukUserModel");
			$SuratMasukUserModel -> insert($data);
			return redirect()->to(base_url('/home/suratmasukuser/'));
		} else {
			return redirect()->to(base_url('/home/suratmasukuser/create'))->withInput()->with('validation', $this->validator);
		}
    }

	
}