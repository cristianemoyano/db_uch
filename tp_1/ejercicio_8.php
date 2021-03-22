<?php
/*
Asignatura: BASE DE DATOS II
Tema: LENGUAJE PHP Y HTML
Cristian Moyano

Ejercicio 8
Realiza un conversor de dólares a pesos.
La cantidad en dólares que se quiere convertir deberá estar almacenada en una variable.


*/

$cotizacion_dolar = 146;
$dolares_cant = 100;
$pesos = $cotizacion_dolar  * $dolares_cant;

echo "La cantidad es $ " . $pesos. "<br><br>";

?>
