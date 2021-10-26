<?php
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves','Viernes','Sabado','Domingo');

echo count($semana) // count() cuenta el numero de elementos de un array
//devuelvo un 7
echo $semana[count($semana) - 1 ];
//devuelve el último elemento, el de la posición [6], por ello, el -1
?>