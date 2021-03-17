<?php

namespace App\Http\Controllers\Inventario;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto; 


class Productos extends Controller
{
        public function generar(Request $request){
               
                $pro=$request->input('numero');
                return view('/matriz',['pro'=>$pro]);
        }

        public function datos(Request $request){
               
                $pro=$request->input('cantidad');
                $datos=array();
                for($i=1;$i<=$pro;$i++){
                        for($j=0;$j<=$pro;$j++){
                                $datos[$i-1][$j]=$request->input('valor_'.$i.'_'.$j);
                        }
                }
                ///////////////////////////////////////

        //conocemos posiciones del Arreglo

        $arreglo=$datos;
        $regulador=count($arreglo); 
        
        
        //Recorreremos el arreglo 
        for($j=0;$j<=$regulador;$j++)
        {
                for($i=0; $i<=($regulador-1); $i++)
        {
                        if($i>$j)
                        {
                                // dividimos cada campo del arreglo
                                if($arreglo[$j][$j]==0){
                                        
                                         die("El sistema de Ecuaciones No tiene solucion Unica");
                                         
                                       
                                }
                        
                                //code...
                        
                                $division=$arreglo[$i][$j]/$arreglo[$j][$j];
                                
                                for($k=0;$k<=$regulador;$k++)
                                {
                                        //capturamos nuevo campo en la diagonal inferior en la diagonal inferior
                                        $arreglo[$i][$k]=$arreglo[$i][$k]-$division*$arreglo[$j][$k];
                                        
                                }
                        }
                   
                   

                }
        }

        //Recorremos Arreglo
        for($i=$regulador-1;$i>=0;$i--)
        {
                $total=0;
                for($j=$i+1;$j<=$regulador-1;$j++)
                {
                        $total=$total+$arreglo[$i][$j]*$x[$j];
                }
                //capturamos valores de las variables
                if($arreglo[$i][$i]==0){
                        die("El sistema de Ecuaciones No tiene solucion Unica");
                }
                $x[$i]=($arreglo[$i][$regulador]-$total)/$arreglo[$i][$i];
        }
        
                
                $parameters=[
                        'pro'=>$regulador,
                        'matriz'=>$datos,
                        'resultados'=>$x
                ];
                 return view('/resultado',$parameters);
                   die();
                return view('/matriz',['pro'=>$pro]);

        }

  

        
}
