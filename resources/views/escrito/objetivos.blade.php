<!DOCTYPE html>
@extends('layout.master')
@section('content')

<body>
    <div class="container" align="center">
        <h1 style="color: black"> OBJETIVOS </h1>

        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong>Objetivo general</strong></div>
                        <div class="card-body">
                            <div class="caption">
                                <p class="pservices text-justify">
                                    Implementar una página web para la resolución de ecuaciones lineales por el método de Gauss Jordán hasta 10*10.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong>Objetivos especificos</strong></div>
                        <div class="card-body">

                            <div class="caption">
                                <p class="pservices text-justify">
                                    •	Instalación de la herramienta Microsoft Visual Studio Code con el paquete de Laravel.
                                </p>
                                <p class="pservices text-justify">
                                    •	Definir el tamaño de una matriz, en los cuales establecemos el sistema de 'm' ecuaciones lineales con m variables. 
                                </p>
                                <p class="pservices text-justify">
                                    •	Establecer datos del sistema de m ecuaciones lineales con 'm' variables.
                                </p>
                                <p class="pservices text-justify">
                                    •	Operar datos recibido del sistema de ecuaciones lineales.
                                </p>
                                <p class="pservices text-justify">
                                    •	Visualizar solución única propuesta por el aplicativo en la resolución de sistemas de ecuaciones lineales por método de Gauss Jordán.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</body>
@stop