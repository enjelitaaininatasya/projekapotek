<?php

namespace App\Controllers;
use App\Models\UsersModel;

use App\Controllers\BaseController;

class PelangganController extends BaseController
{
    public $usersModel;
    public function indexPegawai()
    {

        $this->usersModel = new UsersModel();
        $data = [
            'pelanggann' => $this->usersModel->getPelanggan(),
        ];
        return view ("pegawai_pelanggan", $data);
    }

    public function indexAdmin()
    {

        $this->usersModel = new UsersModel();
        $data = [
            'pelanggann' => $this->usersModel->getPelanggan(),
        ];
        return view ("admin_pelanggan", $data);
    }
}