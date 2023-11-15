<?php

namespace App\Controllers;
use App\Models\PesananModel;
use App\Controllers\BaseController;

class PesananController extends BaseController
{
    public function create()
    {
        return view('pelanggan_tambahpesanan');
    }
    
    public function konfirmasi()
    {
        return view('pelanggan_konfirmasipesanan');
    }

    public $pesananModel;
    public function indexAdmin()
    {

        $this->pesananModel = new PesananModel();
        $data = [
            'pesanann' => $this->pesananModel->getPesanan(),
        ];
        return view ("admin_pesanan", $data);
    }

    public function indexPegawai()
    {

        $this->pesananModel = new PesananModel();
        $data = [
            'pesanann' => $this->pesananModel->getPesanan(),
        ];
        return view ("pegawai_pesanan", $data);
    }

}
