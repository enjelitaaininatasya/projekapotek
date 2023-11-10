<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing_page');
    }
    
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
    
    public function obat()
    {
        return view('obat');
    }
    public function tambah()
    {
        return view('tambah_obat');
    }
    public function edit()
    {
        return view('edit_obat');
    }

    public function pegawai()
    {
        return view('pegawai');
    }
    public function tmbh()
    {
        return view('tmbh_peg');
    }
    public function ubah()
    {
        return view('edit_pegawai');
    }
}
