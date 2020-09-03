<?php

/* 
CONDICIONALES
OPERADORES DE COMPARACION
== igual
=== identico compara hasta el tipo de dato
!= diferente
<> diferente
!== no identico
< mayor que 
> menor que
<= menor o igual que
>= mayor o igual que

*/

$color = "BLUE";
if ($color == "red") {
    echo "EL COLOR ES RED";
}else {
    echo "EL COLOR ES AMARILLO";
}
echo "<br>";
//ejemplo2 con elseif
$dia = 1;
if ($dia == 1) {
    echo "lunes";    
}elseif ($dia == 2) {
    echo "martes";
}elseif ($dia == 3) {
    # code...
    echo "miercoles";
}elseif ($dia == 4) {
    # code...
    echo "jueves";
}elseif ($dia == 5) {
    # code...
    echo "viernes";
}
echo "<br>";
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 65; 

//operadores logicos
/**
 * AND Y
 * OR O
 * NOT O
 * and, or 
 * 
 */

if ($edad_oficial >= 18 && $edad_oficial <= 64) {
    echo "esta en el rango deseado";
}else {
    echo "no puede trabajar";
}

//switch

$dia = 4;
echo "<br>";
switch ($dia) {
    case 1:
        echo "monday";
        break;
    case 2;
        echo "tuesday";
        break;    
    case 3:
        echo "wednesday";
        break;
    case 4:
        echo "thursday";
    break;
    case 5;
        echo "friday";
    break;
    default:
        echo "fin de semana";
        break;
}