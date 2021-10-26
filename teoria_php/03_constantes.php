<?php
define('AUTOR', 'Luis');
//el nombre de la constante es AUTOR, del valor Luis
echo AUTOR;
// son globales, accesibles desde cualquier parte del codigo (ambito o scope)
//Una cosntante es como una variable solo que una ve definida podemos volver a cambiar el valor
define('PI', 3.14);
//diferenciamos de las variables
//en las variables si podemos cambiar el calor que se le asigna
$nombre = "Luis";
echo $nombre; // Mostraria Luis en pantalla

$nombre = "Laura";
echo $nombre; // Mostraria Laura en pantalla
//define('AUTOR', 'Laura');//esto no funciona en php, pues ya está definida esta constante

//otra forma de declarar constantes es con la palabra const
const CIUDAD = "Zaragoza";
/* copiar anotaciones aqui*/
?>