<?php

namespace App\Controllers;
use App\Models\LaporankeuanganModel;

use App\Controllers\BaseController;

class LaporankeuanganController extends BaseController
{
    public $laporankeuanganModel;
    public function indexPegawai()
    {
        $this->laporankeuanganModel = new LaporankeuanganModel();
        $data = [
            'laporann' => $this->laporankeuanganModel->getLaporan(),
        ];
        return view ("pegawai_laporankeuangan", $data);
    }

    public function createPegawai()
    {
        return view('pegawai_tambahlaporankeuangan');
    }

    public function storePegawai()
    {
        return view('pegawai_laporankeuangan');
    }

}
