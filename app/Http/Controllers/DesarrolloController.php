<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesarrolloController extends Controller
{
    public function index(){
        return view ('principal');
    }
    public function desarrollo(){
        return view('escrito.desarrollo');
    }
}
