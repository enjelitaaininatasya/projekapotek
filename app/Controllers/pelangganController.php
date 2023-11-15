<?php

namespace App\Controllers;
use App\Models\UserModel;

use App\Controllers\BaseController;

class PelangganController extends BaseController
{
    public $userModel;
    public function indexPegawai()
    {

        $this->userModel = new UserModel();
        $data = [
            'pelanggann' => $this->userModel->getPelanggan(),
        ];
        return view ("pegawai_pelanggan", $data);
    }
}