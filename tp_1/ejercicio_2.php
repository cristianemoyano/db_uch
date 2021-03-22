<?php

/*
Asignatura: BASE DE DATOS II
Tema: LENGUAJE PHP Y HTML
Cristian Moyano

Ejercicio 2
Modifica el programa anterior para que muestre tu dirección y tu número de teléfono.
Cada dato se debe mostrar en una línea diferente.
Mezcla de alguna forma las salidas por pantalla, utilizando tanto HTML como PHP.

*/

$location = 'Calle 123, Ciudad, Mendoza';
$tel = '1242534534123';

// Forma 1: Código HTML embebido en PHP.

echo "
    ---- FORMA 1: Código HTML embebido en PHP ----
    </br></br>
    Mi dirección es: Calle 123, Ciudad, Mendoza
    </br>
    Mi número de teléfono es: 1242534534123
    </br></br>
";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <!-- Forma 2: Còdigo PHP embebido en el HTML -->
    ---- FORMA 2: Còdigo PHP embebido en el HTML ----
    </br>
    <p>Mi dirección es: <?php echo $location; ?></p>
    <p>Mi número de teléfono es: <?php echo $tel; ?></p>
</body>
</html>