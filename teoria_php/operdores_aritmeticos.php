<?php

/* Operadores Aritméticos:

+	Suma
-	Resta
*	Multiplicación
/	División
%   Módulo o resto de división
-- */

$numero1 = 10;
$numero2 = 6;

$resultado = $numero1 + $numero2;
echo $resultado;

/* Operadores de Asignación:

=
+=
-=
*=
/=

-- */

// $numero1 = 10;
// $numero2 = 5;
// // $numero = $numero + 7;
// $numero += 7; //es lo mismo que la línea anterior
// echo $numero;

/* Operadores de Comparación:


== igualdad '10' es igual a 10, o por ejemplo 0 es igual a false
=== idéntico (en tipo) '10' no es igual a 10, 0 no es igual a false
!=, <>  //distinto de
!== //ser distinto de pero tambien de tipo
>
<
>=
<=
-- */

// $numero = '10'; // String

// $variable = 'true';

// if ($variable < true) {
// 	echo "string";
// }

/* Operadores Lógicos:

and, &&
or, ||
xor  
!

-- */

// $numero = 10;
// if ($numero >= 10 && $numero < 20) {
// 	echo "Ejecuta";
// }

/* Operadores de Incremento / Decremento:

++$x
$x++
--$x
$x--

-- */

$numero = 10;

// $numero = $numero + 1;
// $numero += 1;
// echo $numero--;
// echo "<br />";
// echo $numero;

/* Operadores de Cadenas:

.
.=
-- */

$texto = 'Cadena de Texto';
$texto .= ' Una segunda Cadena de Texto';

echo $texto;
// se concatenan
?>