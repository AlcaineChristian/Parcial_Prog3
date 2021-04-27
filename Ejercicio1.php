<?php
/******************************************************************************

Alcaine Tomas

Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.

*******************************************************************************/

$cantidad=0;
$suma=0;
$numero=1;

while($suma<=1000)
{
    if( $suma+$numero<=1000)
    {
        $suma = $suma+$numero;
       echo("$numero ");
       $numero++;
       $cantidad++; 
    }elseif ($suma+$numero>1000)
    {
        break;
    }
    
    
    
}

printf("\nSE SUMARON {$cantidad} NUMEROS");
?>
