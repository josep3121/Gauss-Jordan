<!DOCTYPE html>
@extends('layout.master')
@section('content')

<body>
    <div class="container" align="center">
        <h1 style="color: black"> DESARRROLLO </h1>

        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong> Diagrama UML </strong></div>
                        <div class="card-body">
                            <div class="caption">
                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/diagramaUML.png')}}" >
                                </p>
                            </div>
                        </div>
                    </div>  

                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong> Casos de uso </strong></div>
                        <div class="card-body">
                            <div class="caption">
                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/casosdeuso.png')}}" >
                                </p>
                            </div>
                        </div>
                    </div>  

                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong> Diagrama de actividades </strong></div>
                        <div class="card-body">
                            <div class="caption">
                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/diagramadeactividades.png')}}" >
                                </p>
                            </div>
                        </div>
                    </div>  

                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong> Flujo de eventos </strong></div>
                        <div class="card-body">
                            <div class="caption">
                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/flujodeeventos.png')}}" >
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