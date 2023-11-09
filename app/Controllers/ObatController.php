<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatModel;

class ObatController extends BaseController
{
    public $obatModel;
    public function index()
    {
        
        $this->obatModel = new ObatModel();
        $data = [
            'obats' => $this->obatModel->getObat(),
        ];
        return view ("obatpelanggan", $data);
    }
}
