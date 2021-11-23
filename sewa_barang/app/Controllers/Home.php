<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function regis()
    {
        return view('registrasi');
    }
    public function login()
    {
        return view('login');
    }
}
