<?php
include ('misFunciones.php');


$cajaCantidad = $_POST['cajaCantidad'];
$cajaNumSerie = $_POST['cajaNumSerie'];
$cajaCategoria = $_POST['cajaCategoria'];
$id = $_POST['id'];


$mysqli = conectaBBDD();

 $resultadoQuery = $mysqli -> query("Update articulosBuena Set Cantidad='$cajaCantidad', Num_Serie='$cajaNumSerie',Categoria='$cajaCategoria' Where id='$id'");

 require 'paginaAlmacen.php';
?>
