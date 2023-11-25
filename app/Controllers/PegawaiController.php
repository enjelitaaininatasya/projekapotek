<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class PegawaiController extends BaseController
{
    public $userModel;
    public function indexAdmin()
    {
        $this->userModel = new UserModel();
        $data=[
            'pegawaii'  =>  $this->userModel->getPegawai(),
        ];

        return view('admin_pegawai', $data);
    }

    public function edit()
    {
        return view('admin_editpegawai');
    }

    public function create()
    {
        return view('admin_tambahpegawai');
    }
    

}
