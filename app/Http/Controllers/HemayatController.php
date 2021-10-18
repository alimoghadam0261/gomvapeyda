<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HemayatController extends Controller
{
    public function index()
    {
        return view('hemayat');
    }
}
