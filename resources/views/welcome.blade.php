<!DOCTYPE html>
@extends('layout.master')
@section('content')

<body background="{{url('imagenes/whitey.jpg')}}">
    <div class="container" align="center">
        <h1 style="color: black"> DESARRROLO DE MATRIZ LINEAL 10x10 </h1>

        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card text-left">
                    
                        <div class="card-header" style="color: black"><strong>Introducción</strong></div>
                        <div class="card-body">

                            <div class="caption">
                            
                                <p class="pservices text-justify">
                                    Hoy en día, la solución de los sistemas de ecuaciones lineales encuentra una amplia aplicación tanto en la ciencia como en la tecnología. En particular, se puede afirmar, que en cualquier rama de la ingeniería existe al menos una aplicación que requiera del planteamiento y solución de tales sistemas. Actualmente existen muchas situaciones en donde se busca resolver un sistema de ecuaciones lineales por un método más sencillo, optando por el método de Gauss Jordán, el cual es más fácil de desarrollar pues solo se apoya en multiplicar filas y columnas para obtener una matriz identidad, utilizando solo operaciones básicas como la suma, la división y la resta, obteniendo directamente al resultado de las variables.
                                </p>

                                <p class="pservices text-justify">
                                    Este proyecto se realiza con el objetivo de crear una aplicación web en modo local, la cual pueda resolver fácilmente sistemas de ecuaciones usando el método de Gauss Jordán. Para ello, en primer lugar, fue necesario instalar el paquete de software libre XAMPP el cual actuara de servidor web en nuestra red local, a continuación, fue necesario instalar Laravel el cual es uno de los frameworks de código abierto más fáciles de asimilar para PHP. Es simple, muy potente y tiene una interfaz elegante y divertida de usar, posteriormente, se debe instalar composer el cual es un requisito casi imprescindible ya que es un manejador de paquetes para PHP que proporciona un estándar para administrar, descargar e instalar dependencias y librerías. Luego, se tomó el editor de programación Microsoft Visual Studio Code, el cual es un editor de código fuente gratuito y de código abierto desarrollado por Microsoft para Windows, Linux y MacOS. Incluye control integrado de Git, resaltado de sintaxis, finalización inteligente de código, fragmentos y refactorización de código.
                                </p>
                            
                            </div>
                        </div>
                    </div>

                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong>Formulación del problema</strong></div>
                        <div class="card-body">
                            ¿Es posible resolver ecuaciones lineales utilizando el método de Gauss Jordán?
                        </div>
                    </div>

                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong>Objetivo general</strong></div>
                        <div class="card-body">
                            Implementar un software para la resolución de ecuaciones lineales por el método de Gauss Jordán
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</body>
@stop