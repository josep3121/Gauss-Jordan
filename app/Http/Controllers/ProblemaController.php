<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblemaController extends Controller
{
    public function index(){
        return view ('principal');
    }
    public function problema(){
        return view('escrito.problema');
    }
}
