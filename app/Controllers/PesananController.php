<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PesananController extends BaseController
{
    public function create()
    {
        return view('tambahpesanan');
    }
    
    public function konfirmasi()
    {
        return view('konfirmasipesanan');
    }


}
