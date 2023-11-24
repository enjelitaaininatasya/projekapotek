<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }

    public function auth()
    {
        if(logged_in()){
            if(in_groups('admin')){
                return redirect()->to('/admin/aboutus');
            }
            else if(in_groups('pegawai')){
                return redirect()->to('/pegawai/aboutus');
            }
            else if(in_groups('pelanggan')){
                return redirect()->to('/pelanggan/aboutus');
            }
        }
    }


    public function aboutusadmin()
    {
        return view('admin_aboutus');
    }

    public function aboutuspegawai()
    {
        return view('pegawai_aboutus');
    }

    public function aboutuspelanggan()
    {
        return view('pelanggan_aboutus');
    }
//
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
    

    
}
