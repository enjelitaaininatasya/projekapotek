<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class PegawaiController extends BaseController
{
    public $usersModel;
    public function indexAdmin()
    {
        $this->usersModel = new UsersModel();
        $data=[
            'pegawaii'  =>  $this->usersModel->getPegawai(),
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
