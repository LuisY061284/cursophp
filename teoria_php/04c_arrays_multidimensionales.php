<?php
$empleados = array(array('Juan', 25),array('Juana', 26), array('Ernesto', 30));
$empleados2 = [array('Juan', 25),array('Juana', 26), array('Ernesto', 30)];
$empleados3 = [['Juan', 25],['Juana', 26], ['Ernesto', 30]];

echo $empleados [0][0] . " " . $empleados[1][0] . '<br>';
echo $empleados [1][0] . " " . $empleados[1][1] . '<br>';
echo $empleados [2][0] . " " . $empleados[2][1] . '<br>';


$empleados4 = [ 
    'id01' => ['nombre' => 'Pablo' , 'edad' => 54] ,
    'id02' => ['nombre' => 'Paula' , 'edad' => 25] , 
];

echo $empleados4 ['id01']['nombre'] . " tiene " . $empleados4['id01'] ['edad'] . ' años <br>';
?>