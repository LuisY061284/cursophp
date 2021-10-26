<?php
$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre','Octubre', 'Noviembre', 'Diciembre'
);
$alejandro = array('telefono' => 547745548, 'edad' => 20, 'pais' => 'Cuba');

extract($alejandro);
//extract - improtar variables a la tabla de simbolos actual desde un array
echo $telefono;
echo $alejandro['telefono'];
echo '<br>';
echo '<br>';

$ultimo_mes = array_pop($meses); //quita, extrae el último elemento del array, y devuelve su valor.
print_r($meses);
echo '<br>' . $ultimo_mes . '<br>';

array_push($meses, 'Chufiembre', 'Futiembre', $ultimo_mes);
print_r($meses);


echo join(',',$meses);
echo join('<br>',$meses);

$meses_inverso =  array_reverse($meses);
print_r($meses_inverso);
//array_search - Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de exito, devuelve false si no encuentra
echo'<h2> ¿Es Chufiembre un mes de verdad?';
if (array_search('Chufiembre', $meses) != false) {
    echo '<p> Si es un mes </p>';
} else {
    echo '<p> no está en la lista de meses </p>' ;
}

if (in_array('Chufiembre', $meses) == true) {
    echo '<p> Si es un mes </p>';
} else {
    echo '<p> no está en la lista de meses </p>' ;
}
?>