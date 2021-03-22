<?php
/*
Asignatura: BASE DE DATOS II
Tema: LENGUAJE PHP Y HTML
Cristian Moyano

Ejercicio 5
Escribe un programa que utilice las variables $x y $y. 
Asignales los valores 144 y 999 respectivamente. 
A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.


*/

$x = 144;
$y = 999;

$suma = $x + $y;
$resta = $x - $y;
$division = $x / $y;
$multiplicacion = $x * $y;

echo "Variable X: " . $x . "<br><br>";
echo "Variable Y: " . $y. "<br><br>";
echo "Suma X+Y: " . $suma. "<br><br>";
echo "Resta X-Y: " . $resta. "<br><br>";
echo "División X/Y: " . $division. "<br><br>";
echo "Multiplicación X * Y: " . $multiplicacion. "<br><br>";

?>
