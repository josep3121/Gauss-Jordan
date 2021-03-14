@extends('layout.master')
@section('content')


<body>
  <div class="container" align="center">
    <h1 style="color: black"> SOLUCIÓN DE MATRIZ </h1>
    <table class="table table-dark table-striped">
      <tbody>
          @for($i=0;$i<$pro;$i++) 
            <tr>
              @for($j=0;$j<=$pro;$j++) 
                <td>
                 
                    @if($j<$pro)
                      X{{$j+1}} : {{$matriz[$i][$j]}}
                    @endif
                        
                    @if($j==$pro)
                      Resultado : {{$matriz[$i][$j]}}
                    @endif
              
                </td>
              @endfor
            </tr>
          @endfor
      </tbody>
    </table>

    <h1>Resultado Propuesto</h1>
    <td>
        <h4>
            @for($i=0;$i<$pro;$i++) <li>X{{$i+1}}: {{$resultados[$i]}}</li><br>
              @endfor
        </h4>
    </td>
  </div>
</body>
@stop