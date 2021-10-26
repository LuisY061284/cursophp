<?php
//BUCLE WHILE - EVALUA Y LUEGO ACTUA
$x = 20; //valor de inicio

while($x >=1){
    echo $x . '<br>'; //mientras $x sea mayor o igual que 1, entonces:
    $x--; // decrementa el valor - si no estuviese, tendríamos un bucle infinito
}

//BUCLE DO WHILE - ACTUA Y DESPUES EVALUA
//ejecuta nuestras instrucciones al menos una vez, aunque no se cumpla
echo 'BUCLE WHILE <br>';
$i = 1;
do {
    echo  $i . '<br>';
    $i++;
}while($i <= 20);
//AHORA LA CONDICION NO SE VA A CUMPLIR, PERO  EL PRIMER PASO LO HACE IGUAL
echo 'BUCLE DO WHILE pero no se cumple <br>';
$i = 45;
do {
    echo $i . '<br>';
    $i++;
}while($i <= 20);
?>