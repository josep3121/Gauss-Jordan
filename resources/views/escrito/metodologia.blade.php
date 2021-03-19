<!DOCTYPE html>
@extends('layout.master')
@section('content')

<body>
    <div class="container" align="center">
        <h1 style="color: black"> METODOLOGÍA </h1>

        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card text-left">
                        <div class="card-header" style="color: black"><strong> </strong></div>
                        <div class="card-body">
                            <div class="caption">
                                <p class="pservices text-justify">
                                    Este proyecto se realizará basándose a la metodología Kanban puesto que es fácil de utilizar, manejar e implementar con el equipo de trabajo, permitiendo organizar las actividades y realizar tareas de manera efectiva coordinando efectivamente con el grupo de trabajo.
                                </p>

                                <p class="pservices text-justify">
                                Esta metodología permite beneficiarse gracias a los tableros digitales de Kanban, que son accesibles y visibles para los integrantes del grupo de trabajo mediante uso de carriles, tarjetas y columnas permitiendo realizar un trabajo en tiempo real.
                                </p>
                            </div>
                        </div>

                        <div class="card text-left">
                        <div class="card-header" style="color: black"><strong> Metodología Kanban </strong></div>
                        <div class="card-body">
                            <div class="caption">
                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/historia1.png')}}" >
                                </p>

                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/historia2.png')}}" >
                                </p>

                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/historia3.png')}}" >
                                </p>

                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/historia4.png')}}" >
                                </p>

                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/historia5.png')}}" >
                                </p>

                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/historia6.png')}}" >
                                </p>

                                <p class="pservices text-center">
                                    <img src="{{url('imagenes/historia7.png')}}" >
                                </p>
                            </div>
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