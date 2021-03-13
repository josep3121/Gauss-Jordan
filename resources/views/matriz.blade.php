@extends('layout.master')
@section('content')

<div class="container" align="center">
<br>
    <h1 style="color: black"> MATRIZ A RESOLVER CON GAUSS JORDÁN </h1>
    <br><br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{url('/operar')}}" method='POST'>
                @csrf
                @for($i=1;$i<=$pro;$i++) <div class="row">
                    @for($j=0;$j<=$pro;$j++) <div class="col-2">
                        <input type="number" name="valor_{{$i}}_{{$j}}" id="numero" class="form-control" /><br>
        </div>
        @endfor
    </div>
    @endfor
    <br>
    <input type="hidden" value='{{$pro}}' name="cantidad">

    <button type="submit" class="btn btn-success">Resolver</button>

    </form>
    <br><br>
</div>

<div class="col-md-3"></div>
</div>
</div>

@stop