<?php
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves','Viernes','Sabado','Domingo');
$cristina = [
    'nombre' => 'Cristina',
    'apellido' => 'Jarque',
    'telefono' => '978655662',
    'edad' => 40,
    'vip' => true,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los dias de la semana</title>
</head>
<body>
    <h1>Días de la semana</h1>
    <ul>
        <?php
        foreach ($semana as $dia) {
            echo '<li>' . $dia . '</li>';
        }
        ?>
    </ul>
    <h2>Info de Cristina</h2>
    <ul>
    <?php
        foreach ($cristina as $key => $value) {
            echo '<li>' . $value . '</li>';
        }
        ?>
    </ul>
    <h2>Info de Cristina de otra manera</h2>
    <ul>
    <?php
        foreach ($cristina as $key => $value) {
            echo '<li>' . $key . ': <b>' . $value . '</b></li>';
        }
        ?>
    </ul>

    <h2>Info de Cristina en una tabla</h2>
    <table>
    <?php
        foreach ($cristina as $key => $value) {
            echo '<tr><th>' . $key . '</th><td>' . ': <b>' . $value . '</td></tr>';
        }
        ?>
    </table>
</body>
</html>