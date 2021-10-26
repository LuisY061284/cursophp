<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre','Octubre', 'Noviembre', 'Diciembre');
$numeros = array(1, 22, 23, 10, 9, 5, 70, 100,  20);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los dias de la semana</title>
</head>
<body>
    <h1>Ordenando Arrays</h1>
    <h2>Primero sin ordenar</h2>
    <ul>
        <?php
        foreach ($meses as $key => $value) {
            echo '<li>' . $value . '</b></li>';
        }
        ?>
    </ul>
    <h2>Ahora ordenamos los meses</h2>
    <ul>
        <?php
        sort($meses); //la funcion sort() ordena alfabeticamente
        foreach ($meses as $key => $value) {
            echo '<li>' . $key . ': <b>' . $value . '</b></li>';    
        }
        ?>
    </ul>
    <h2>Los números en orden</h2>
    <ul>
        <?php
        ($numeros);
        foreach ($numeros as $key => $value) {
            echo '<li>' . $key . ': <b>' . $value . '</b></li>';    
        }
        ?>
    </ul>
    <h2>Ahora ordenamos los números</h2>
    <ul>
        <?php
        sort($numeros);
        foreach ($numeros as $key => $value) {
            echo '<li>' . $key . ': <b>' . $value . '</b></li>';    
        }
        ?>
    </ul>

    </body>
</html>