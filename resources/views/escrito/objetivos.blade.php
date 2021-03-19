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
                                    Implementar una calculadora on line para solución de ecuaciones lineales por el método de Gauss Jordán hasta 10*10.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong>Objetivos específicos</strong></div>
                        <div class="card-body">

                            <div class="caption">
                                <p class="pservices text-justify">
                                    •	Instalación de la herramienta Microsoft Visual Studio Code con el paquete de Laravel.
                                </p>
                                <p class="pservices text-justify">
                                    •	Establecer el numero de ecuaciones e incógnitas de los sistemas de ecuaciones   lineales  
                                </p>
                                <p class="pservices text-justify">
                                    •	Establecer valores de los coeficientes en las incógnitas x_1…..x_n de los sistemas de ecuaciones lineales.  
                                </p>
                                <p class="pservices text-justify">
                                    •	Solucionar el sistema de ecuaciones lineales por método de Gauss Jordán. 
                                </p>
                                <p class="pservices text-justify">
                                    •	Mostrar respuesta única del sistema de ecuaciones.
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