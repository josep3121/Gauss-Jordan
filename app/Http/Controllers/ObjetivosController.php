<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjetivosController extends Controller
{
    public function index(){
        return view ('principal');
    }
    public function objetivos(){
        return view('escrito.objetivos');
    }
}
