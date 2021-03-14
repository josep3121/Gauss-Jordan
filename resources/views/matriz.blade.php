@extends('layout.master')
@section('content')

<div class="container" align="center">
<br>
    <h1 style="color: black"> MATRIZ A RESOLVER CON GAUSS JORDÁN </h1>
    <br><br>
            
            <form action="{{url('/operar')}}" method='POST'>
                @csrf
                @for($i=1;$i<=$pro;$i++) <div class="row">
                    @for($j=0;$j<=$pro;$j++) <div class="col-1">
                        @if($j<$pro)
                            <input type="number"  name="valor_{{$i}}_{{$j}}" id="numero" class="form-control" placeholder="X{{$j+1}}"/>
                         @endif

                         @if($j==$pro)
                            <input type="number"  name="valor_{{$i}}_{{$j}}" id="numero" class="form-control" placeholder="Resultado"/>
                         @endif
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


@stop