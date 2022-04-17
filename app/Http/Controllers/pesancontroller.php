<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesancontroller extends Controller
{
    public function index()
    {
        return view('pesan');
    }
}
