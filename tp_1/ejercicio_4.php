<?php
/*
Asignatura: BASE DE DATOS II
Tema: LENGUAJE PHP Y HTML
Cristian Moyano

Ejercicio 4
Escribe un programa que muestre tu horario de clase mediante una tabla.
Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores),
ve intercalando código HTML y PHP para familiarizarte con éste último.

*/

$table = "
    <table>
        <tr>
            <th>Horarios</th>
            <th>Materias</th>
        </tr>
        <tr>
            <td>16:00</td>
            <td>Fisica</td>
        </tr>
        <tr>
            <td>18:00</td>
            <td>Quimica</td>
        </tr>
        <tr>
            <td>20:00</td>
            <td>Programación</td>
        </tr>
    </table>
";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <!-- Estilos CSS -->
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
<!-- Mostrar tabla -->
<?php echo $table; ?>

</body>
</html>