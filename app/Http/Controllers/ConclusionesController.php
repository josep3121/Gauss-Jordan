<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConclusionesController extends Controller
{
    public function index(){
        return view ('principal');
    }
    public function conclusiones(){
        return view('escrito.conclusiones');
    }
}
