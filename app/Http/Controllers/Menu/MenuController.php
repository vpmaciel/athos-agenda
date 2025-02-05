<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function pessoa()
    {
        return view('index');
    }

    public function empresa()
    {
        return view('index');
    }

    public function logradouro()
    {
        return view('index');
    }

    public function bairro()
    {
        return view('index');
    }

    public function cidade()
    {
        return view('index');
    }

    public function estado()
    {
        return view('index');
    }
}
