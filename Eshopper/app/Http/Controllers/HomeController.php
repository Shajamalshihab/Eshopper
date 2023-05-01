<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function catagory()
    {
        return view('front.catagory');
    }
    public function detail()
    {
        return view('front.detail');
    }
}
