<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodologiaController extends Controller
{
    public function index(){
        return view ('principal');
    }
    public function metodologia(){
        return view('escrito.metodologia');
    }
}
