<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DatatransaksiModel;

class DatatransaksiController extends BaseController
{
    public $datatransaksiModel;
    public function indexAdmin()
    {

        $this->datatransaksiModel = new DatatransaksiModel();
        $data = [
            'dataa' => $this->datatransaksiModel->getData(),
        ];
        return view ("admin_datatransaksi", $data);
    }

    public function indexPegawai()
    {

        $this->datatransaksiModel = new DatatransaksiModel();
        $data = [
            'dataa' => $this->datatransaksiModel->getData(),
        ];
        return view ("pegawai_datatransaksi", $data);
    }

    public function createPegawai()
    {
        return view('pegawai_tambahdatatransaksi');
    }

    public function createAdmin()
    {
        return view('admin_tambahdatatransaksi');
    }

    public function storePegawai()
    {
        return view('pegawai_datatransaksi');
    }
}
