<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index()
    {
        return view('rekam-medis');
    }public function all()
    {
        return view('formulir');
    }
}
