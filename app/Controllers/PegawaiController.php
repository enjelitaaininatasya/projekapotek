<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class PegawaiController extends BaseController
{
    public $userModel;
    public function index()
    {
        $this->userModel = new UserModel();
        $data=[
            'pegawaii'  =>  $this->userModel->getPegawai(),
        ];

        return view('pegawai', $data);
    }

    
}
