<?php
include ('misFunciones.php');


$cajaCantidad = $_POST['cajaCantidad'];
$cajaNumSerie = $_POST['cajaNumSerie'];
$cajaCategoria = $_POST['cajaCategoria'];


$mysqli = conectaBBDD();

 $resultadoQuery = $mysqli -> query("INSERT INTO articulosBuena (Num_Serie, Cantidad, Categoria) VALUES ('$num_serie','$cajaCantidad','$cajaCategoria'");
 $numUsuarios = $resultadoQuery -> num_rows;
 
?>
