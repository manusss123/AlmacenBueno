<?php
//inicia la sesión del navegador en el servidor PHP
//o la continúa si ya estuviera iniciada
include ('misFunciones.php');
;
$condicion = $_POST['condicion'];
$mysqli = conectaBBDD();


$resultadoQueryy = $mysqli->query("SELECT * FROM articulosBuena  ");

$numPreguntas = $resultadoQueryy->num_rows;

$listaPreguntas = array();

?>



