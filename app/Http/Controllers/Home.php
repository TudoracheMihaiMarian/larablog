<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        // echo " sunt controlerul home";
        return view('home');
    }
}