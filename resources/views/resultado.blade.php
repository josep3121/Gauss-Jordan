@extends('layout.master')
@section('content')

<h1 align="center"> Solución de Matriz </h1>

<table class="table table-dark table-striped">

  <tbody>

    @for($i=0;$i<$pro;$i++) <tr>

      @for($j=0;$j<=$pro;$j++) <td>
        {{$matriz[$i][$j]}}

        </td>
        @endfor
        </tr>
        @endfor
  </tbody>
</table>
<h1>Resultado Propuesto</h1>
<ul>
  @for($i=0;$i<$pro;$i++) <li>X{{$i+1}}: {{$resultados[$i]}}</li>
    @endfor
</ul>
@stop