<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatModel;

class ObatController extends BaseController
{
    public $obatModel;
    public function indexPelanggan()
    {

        $this->obatModel = new ObatModel();
        $data = [
            'obats' => $this->obatModel->getObat(),
        ];
        return view ("pelanggan_obat", $data);
    }

    public function indexAdmin()
    {

        $this->obatModel = new ObatModel();
        $data = [
            'obats' => $this->obatModel->getObat(),
        ];
        return view ("admin_obat", $data);
    }

    public function edit()
    {
        return view('admin_editobat');
    }

    public function createAdmin()
    {
        return view('admin_tambahobat');
    }

    public function indexPegawai()
    {

        $this->obatModel = new ObatModel();
        $data = [
            'obats' => $this->obatModel->getObat(),
        ];
        return view ("pegawai_obat", $data);
    }

    public function editPegawai()
    {
        return view('pegawai_editobat');
    }

    public function createPegawai()
    {
        return view('pegawai_tambahobat');
    }
}
