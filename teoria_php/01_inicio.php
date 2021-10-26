<?php
//con php se puede insertar codigo en cualquier HTML entre sus simbolos<? php y ? >, pero juntos
//echo nos sirve para ,msotrar informacion en la pantalla
echo "Hola Mundo! 1 <br>" ;
//con dos barras tenemos un comentairo de linea
echo "Hola Mundo! 2 <br>" ; //con dos barras tenemos un comentarIo de linea
echo "Hola Mundo! 3 <br>" ; # con la almohadilla tambien tenemos un comentario en una línea
# con la almohadilla tambien tenemos un comentario en una linea
/* ESTO ES UN COMENTARIO
ESTILO CSS MULTILINEA
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>01_Inicio de PHP</h1> 
    <h2><?php /*comentario en medio */ echo "Hola Mundo!<br> Hola Mundo! 2<br>";//puedo meter un comentario ahi?></h2>
    <h<?php echo 3?>>Ejemplo de integración entre PHP y HTML</<?php echo 'h3'?>>
</body>
</html>