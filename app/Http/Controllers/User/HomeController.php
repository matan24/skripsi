<?php

namespace App\Http\Controllers\User;

use App\Info;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $info = Info::all();
        return view('User/home', compact('info'));
    }

    public function galeri()
    {
        $info = Info::all();
        return view('User/galeri', compact('info'));
    }

    public function surat()
    {
        $info = Info::all();
        return view('User/surat', compact('info'));
    }
  
    public function data()
    {
        $info = Info::all();
        return view('User/data', compact('info'));
    }
}
