<?php
//PARA CREAR NUESTRAS PROPIAS FUNCIONES

function multiplicar($base, $altura){
    return $base * $altura;
}

function multiplicar2($base, $altura){
    $resultadoMultiplicacion = $base * $altura;
    return $resultadoMultiplicacion;
}


$resultado1 = multiplicar(97, 25)
echo $resultado1 . '<br>';
$resultado2 = multiplicar2(97, 25)
echo $resultado2 . '<br>';

multiplicar2(20, 50);
echo $resultadoMultiplicacion;

?>