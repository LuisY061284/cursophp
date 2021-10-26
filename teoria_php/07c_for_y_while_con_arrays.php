<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre','Octubre', 'Noviembre', 'Diciembre'
);
$mostrarMeses = "";
//BUCLE FOR PARA RECORRER ARRAYS
//$i =  cada elemento del array
for ($i=0; $i < count($meses) ; $i++) { 
    $mostrarMeses .= $meses[$i] . '<br>';
}

echo $mostrarMeses;

// CON WHILE PODEMOS HACER LO MISMO

$mostrarMeses2 = "";
$a = 0;
while ($a < count($meses)) {
    $mostrarMeses2 .= $meses[$a] . '<br>';
    $a++;
}
echo $mostrarMeses2;

?>