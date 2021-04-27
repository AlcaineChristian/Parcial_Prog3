<?php
/******************************************************************************

Alcaine Tomas

Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.

*******************************************************************************/

echo date('d/m/Y');
switch(date('m'))
{
    case 1:
        echo("\nVerano");
        break;
    case 2:
        echo("\nVerano");
        break;
    case 3:
        if(date('d')<=20)
        {
           echo("\nVerano"); 
        }elseif(date('d')>=2)
        {
           echo("\nOtoño"); 
        }
        break;
    case 4:
        echo("\nOtoño");
        break;
    case 5:
        echo("\nOtoño");
        break;
    case 6:
        if(date('d')<=20)
        {
           echo("\nOtoño"); 
        }elseif(date('d')>=2)
        {
           echo("\nInvierno"); 
        }
        break;
    case 7:
        echo("\nInvierno");
        break;
    case 8:
        echo("\nInvierno");
        break;
    case 9:
        if(date('d')<=20)
        {
           echo("\nInvierno"); 
        }elseif(date('d')>=2)
        {
           echo("\nPrimavera"); 
        }
        break;
    case 10:
        echo("\nPrimavera");
    case 11:
        echo("\nPrimavera");
    case 12:
        if(date('d')<=20)
        {
           echo("\nPrimavera"); 
        }elseif(date('d')>=2)
        {
           echo("\nVerano"); 
        }
        break;
}

?>