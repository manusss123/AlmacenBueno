<?php
include ('misFunciones.php');

$condicion = $_POST['condicion'];
$mysqli = conectaBBDD();
$qry = $mysqli->query("SELECT * FROM adminAlmacen");
$numPreguntas = $qry->num_rows;
//declaro un array en php para guardar el resultado de la query
$listaPreguntas = array();
for ($i = 0; $i < $numPreguntas; $i++) {
    $r = $qry->fetch_array(); //leo una fila del resultado de la query
    $listaPreguntas[$i][0] = $r['DNI'];
    $listaPreguntas[$i][1] = $r['email'];
    $listaPreguntas[$i][2] = $r['contraseña'];
    $listaPreguntas[$i][3] = $r['nombre'];
    $listaPreguntas[$i][4] = $r['apellidos'];
    $listaPreguntas[$i][5] = $r['sexo'];
    $listaPreguntas[$i][6] = $r['id'];
}
?>

<html>




    <script>



    </script>
</html>
