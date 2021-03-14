<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JustificacionController extends Controller
{
    public function index(){
        return view ('principal');
    }
    public function justificacion(){
        return view('escrito.justificacion');
    }
}
