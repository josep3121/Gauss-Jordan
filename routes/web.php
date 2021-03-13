<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Informacion;
use App\Http\Controllers\Inventario\Categorias;
use App\Http\Controllers\Inventario\Productos;
use App\Http\Controllers\MatrizController;

Route::get('/',[Informacion::class, 'index']);

Route::get('informacion/somos',[Informacion::class, 'somos']);

Route::get('matriz/resolver',[MatrizController::class, 'resolver']);

Route::get('informacion/contacto',[Informacion::class, 'contacto']);

Route::get('/matriz', [Productos::class, 'generar']);

Route::post('/operar', [Productos::class, 'datos']); 



