<?php

// esto es un comentario
/* y esto también */
$nombre = 'Ruben'; // no hace falt indicar el tipo
$ciudad = "Barcelona";
$numero = 1;
$booleano = false;

$saludo = "Hola $nombre";
// $saludo = 'Hola $nombre'; // si ponemos entre comilldas simples la varibales las coje como texto y no variable con su datos.

$num1 = 1;
$num2 = 2;

$resultado = $num1 + $num2; //signo matematico
$resultado = $num1 . $num2; // signo matematico

const PI =3.141659; // si haces constante no hace falta ponerle el simbolo $ o se quejará
// PI = 6.28; una constante no se puede reasignar y cambiar valor
define ("G", 9.28); // variable

// echo $resultado."<br>"; // concatenamos un br para que se muestre y haga salto de linea

// echo G;

// if (G > 10) {
//     echo "g > 10"; 
// } else 

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $saludo ?></h1>
    <h1><?= $ciudad ?></h1>

</body>
</html>