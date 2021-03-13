<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatrizController extends Controller
{
    public function index(){

        return view('welcome');

    }

    public function resolver(){


        return view('matriz.resolver');

    }
}
