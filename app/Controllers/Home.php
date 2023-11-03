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
}
