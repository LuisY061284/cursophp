<?php

$numero = 20;
$texto = 'Esto es un texto';
$booleano = true;
$ejemploNull = null;
$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre','Octubre', 'Noviembre', 'Diciembre'
);
$alejandro = array('telefono' => 547745548, 'edad' => 20, 'pais' => 'Cuba');

echo '<br>AHORA CON PRINT_R <br>'; 
var_dump($numero);
echo '<br>' ;
var_dump($texto);
echo '<br>' ;
var_dump($booleano);
echo '<br>' ;
var_dump($ejemploNull);
echo '<br>' ;
var_dump($meses);
echo '<br>' ;
var_dump($alejandro);


echo '<br>AHORA CON PRINT_R <br>';  
print_r($numero);
echo '<br>' ;
print_r($texto);
echo '<br>' ;
print_r($booleano);
echo '<br>' ;
print_r($ejemploNull);
echo '<br>' ;
print_r($meses);
echo '<br>' ;
print_r($alejandro);
?>