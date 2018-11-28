<?php
include ('misFunciones.php');
;

$mysqli = conectaBBDD();


    $id = $_POST['id'];
 
    $resultadoQueryyy = $mysqli->query("SELECT * FROM articulosBuena WHERE Id = '$id'  ");

$numPreguntas = $resultadoQueryyy->num_rows;

//declaro un array en php para guardar el resultado de la query
$listaPreguntas = array();
for ($i = 0; $i < $numPreguntas; $i++) {
    $r = $resultadoQueryyy->fetch_array(); //leo una fila del resultado de la query
    $listaPreguntas[$i][0] = $r['Nombre'];
    $listaPreguntas[$i][1] = $r['Imagen'];
    $listaPreguntas[$i][2] = $r['Num_Serie'];
    $listaPreguntas[$i][3] = $r['Cantidad'];
    $listaPreguntas[$i][4] = $r['Categoria'];
    $listaPreguntas[$i][5] = $r['Id'];
}
?>
<html>
    <div id="contenido">
       
        
        
    </div>
    
    
    
    
   <script>
               var listaArticulo = <?php echo json_encode($listaPreguntas); ?>;
               $('#contenido').text(listaArticulo[0][0]);
   </script>
</html>



