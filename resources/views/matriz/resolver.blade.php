@extends('layout.master')
@section('content')
<br>
<br>
<div class="container" align="center">
<h1 style="color: black"> DETERMINAR GAUSS JORDÁN PARA EL SISTEMA DE ECUACIONES LINEALES </h1>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form action="{{url('/matriz')}}" method="GET">
        <!-- 2 column grid layout with text inputs for the first and last names -->
    
        <br>

        <div class="form-outline mb-4">
          <input type="number" max='10' min='2' name="numero" id="numero" class="form-control" />
          <br>
          <label class="form-label" for="form3Example3">
            <h4>
              Ingrese número de ecuaciones y variables que va a resolver en el sistema
            </h4>
          </label>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-success">Iniciar</button>
        <br><br><br><br>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
@stop