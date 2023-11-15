<?php

namespace App\Controllers;
use App\Models\LaporankeuanganModel;

use App\Controllers\BaseController;

class LaporankeuanganpegawaiController extends BaseController
{
    public $laporankeuanganModel;
    public function index()
    {
        $this->laporankeuanganModel = new LaporankeuanganModel();
        $data = [
            'laporann' => $this->laporankeuanganModel->getLaporan(),
        ];
        return view ("laporankeuanganpegawai", $data);
    }
}
