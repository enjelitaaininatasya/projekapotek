<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DatatransaksiModel;

class DatatransaksipegawaiController extends BaseController
{
    public $datatransaksiModel;
    public function index()
    {

        $this->datatransaksiModel = new DatatransaksiModel();
        $data = [
            'dataa' => $this->datatransaksiModel->getData(),
        ];
        return view ("datatransaksipegawai", $data);
    }

    public function create()
    {
        return view('tambahdatatransaksipegawai');
    }

    public function store()
    {
        return view('datatransaksipegawai');
    }
}
