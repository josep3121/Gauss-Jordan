<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Informacion;
use App\Http\Controllers\Inventario\Categorias;
use App\Http\Controllers\Inventario\Productos;
use App\Http\Controllers\MatrizController;
use App\Http\Controllers\ProblemaController;
use App\Http\Controllers\ObjetivosController;
use App\Http\Controllers\JustificacionController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\DesarrolloController;
use App\Http\Controllers\ConclusionesController;

Route::get('/',[Informacion::class, 'index']);

Route::get('matriz/resolver',[MatrizController::class, 'resolver']);

Route::get('/matriz', [Productos::class, 'generar']);

Route::post('/operar', [Productos::class, 'datos']); 

Route::get('escrito/problema',[ProblemaController::class, 'problema']);

Route::get('escrito/objetivos',[ObjetivosController::class, 'objetivos']);

Route::get('escrito/justificacion',[JustificacionController::class, 'justificacion']);

Route::get('escrito/metodologia',[MetodologiaController::class, 'metodologia']);

Route::get('escrito/desarrollo',[DesarrolloController::class, 'desarrollo']);

Route::get('escrito/conclusiones',[ConclusionesController::class, 'conclusiones']);

