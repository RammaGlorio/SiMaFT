<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LacakSurat extends Controller
{
    public function index()
    {
        return view('lacak-surat');
    }
}
