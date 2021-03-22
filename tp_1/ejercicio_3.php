<?php

/*
Asignatura: BASE DE DATOS II
Tema: LENGUAJE PHP Y HTML
Cristian Moyano

Ejercicio 3
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente traducción al castellano.
Las palabras deben estar distribuidas en dos columnas.
Utiliza la etiqueta <table> de HTML.

*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body>
<table style="border-collapse: collapse;;">
  <tr>
    <th>English</th>
    <th>Spanish</th>
  </tr>
  <tr>
    <td>One</td>
    <td>Uno</td>
  </tr>
  <tr>
    <td>Two</td>
    <td>Dos</td>
  </tr>
  <tr>
    <td>Three</td>
    <td>Tres</td>
  </tr>
  <tr>
    <td>Four</td>
    <td>Cuatro</td>
  </tr>
  <tr>
    <td>Five</td>
    <td>Cinco</td>
  </tr>
  <tr>
    <td>Six</td>
    <td>Seis</td>
  </tr>
  <tr>
    <td>Seven</td>
    <td>Siete</td>
  </tr>
  <tr>
    <td>Eight</td>
    <td>Ocho</td>
  </tr>
  <tr>
    <td>Nine</td>
    <td>Nueve</td>
  </tr>
  <tr>
    <td>Ten</td>
    <td>Diez</td>
  </tr>
</table>

</body>
</html>