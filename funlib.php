<?php
function dia(){
    $dia = date("l"); // devuelve el dia de la semana. l = dia de la semana en letras. En este caso l = Monday
    return $dia . "<br>";
}
function mes(){
    $mes = date("F"); // devuelve el mes del año. F = mes en letras. En este caso F = January
    return $mes . "<br>";
}

function anio(){
    $anio = date("Y"); // devuelve el año. Y = año en numeros. En este caso Y = 2021
    return $anio . "<br>";
}

function fecha(){
    $fecha = date("d/m/Y"); // devuelve la fecha. d = dia del mes. m = mes del año. Y = año. En este caso d/m/Y = 25/01/2021
    return $fecha . "<br>";
}
echo dia();
echo mes();
echo anio();
echo fecha();
?>