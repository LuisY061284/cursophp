<?php
$texto1 = '     Hola que tal?   ';
echo trim($texto1) . '<br>';
// trim () trim - Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena
echo strlen($texto1) . 'Caracteres<br>'; //cuenta los espacios
//si queremos no contar los espacios delprincipio y del final, podemos hacer:
$texto1_trim = trim($texto1);
echo strlen($texto1_trim) . 'Caracteres<br>';

$texto2 = '<?er2ne4jrdf/>';
echo htmlspecialchars ($texto2) . '<br>'; //evita signos HTML como < y >  y alguno más para seguridad en formularios sobretodo.

echo strtolower($texto1) . '<br>'; // este con letras minúsculas

echo strtoupper($texto1) . '<br>'; // este con letras mayúsculas

echo substr($texto1_trim,0,4). '<br>'; // del texto conrtado, no va a mostrar desde el caracter 0 al 4

echo substr($texto1_trim,5). '<br>'; //en este caso no mostrará desde el caracter 5 del string hasta el final

echo strpos($texto1_trim, 'H') . '<br>'; // busca la H y devuelve el 0
echo strpos($texto1_trim, 't') . '<br>'; // busca la t y devuelve el 9
echo strpos($texto1_trim, 'q') . '<br>'; // busca la q y devuelve el 5
echo strpos($texto1_trim, '?') . '<br>'; // busca la ? y devuelve el 12
echo strpos($texto1_trim, 'tal') . '<br>'; // busca la H y devuelve el 9 (donde comienza)
echo strpos($texto1_trim, 'tun') . '<br>'; // busca la H y no devuelve nada por no existir

echo substr($texto1_trim,strpos($texto1_trim, 'q')). '<br>'; //devuelve 'que tal?'
?>