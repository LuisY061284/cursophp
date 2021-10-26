<?php
//los arreglos asociativos nos permiten acceder a sus valores de una forma mas explicita

$luis = array('nombre' => 'Luis', 'apellido' => 'Garcia', 'Telefono' => '987456123', 'edad' => 45, 'vip => true);
//como ya se ha dicho, tambien se puede poner con corchetes

$juana = ['nombre' => 'juana', 'Apellido' => 'Gonzalez', 'Telefono' => '467558923', 'edad' => 25, 'vip => true];
//es habitual crearlos de forma multilinea, se lee mas claro
$cristina = [
    'nombre' => 'Cristina',
    'apellido' => 'Jarque',
    'telefono' => '978655662',
    'edad' => 40,
    'vip' => false,
];
/*
array(
    clave => valor,
    clave2 => valor2,
    clave3 => valor3,
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nombre:
<?php
    echo $luis['nombre']
?>
</p>
</body>
</html>