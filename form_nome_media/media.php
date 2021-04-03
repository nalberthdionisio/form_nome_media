<?php

include ('index.php');

$campoNome = $_GET['nome'];
$campoMedia1 = $_GET['media1'];
$campoMedia2 = $_GET['media2'];
$campoMedia3 = $_GET['media3'];

$resultado = ($campoMedia1 + $campoMedia2 + $campoMedia3) / 3;
echo  "sua media é: ", $resultado, "</br>"; 

?>