<?php
//inicia la sesión del navegador en el servidor PHP
//o la continúa si ya estuviera iniciada
include ('misFunciones.php');
;
$condicion = $_POST['condicion'];
$mysqli = conectaBBDD();

if ($condicion == 1) {
    $cajaBusqueda = $_POST['cajabusqueda'];
    $resultadoQueryy = $mysqli->query("SELECT * FROM articulosBuena WHERE Nombre LIKE '$cajaBusqueda%' ");
} else {
    $resultadoQueryy = $mysqli->query("SELECT * FROM articulosBuena  ");
}
$numPreguntas = $resultadoQueryy->num_rows;

//declaro un array en php para guardar el resultado de la query
$listaPreguntas = array();
for ($i = 0; $i < $numPreguntas; $i++) {
    $r = $resultadoQueryy->fetch_array(); //leo una fila del resultado de la query
    $listaPreguntas[$i][0] = $r['Nombre'];
    $listaPreguntas[$i][1] = $r['Imagen'];
    $listaPreguntas[$i][2] = $r['Num_Serie'];
    $listaPreguntas[$i][3] = $r['Cantidad'];
    $listaPreguntas[$i][4] = $r['Categoria'];
    $listaPreguntas[$i][5] = $r['Id'];
}




//print_r($listaPreguntas);
?>
<html>

    <div id="contenedor">
        <div id="elementos">

        </div>

        <div style="margin-left: 45%; margin-top: 3%" class="align-content-end">
            <a id="flecha" class="btn btn-primary" onclick="alante()" style="float: left" >|<br>v </a>


        </div>
    </div>

    <script>

        var aux = 0;
        var numerocuadrados = 22;
        var listaPreguntas = <?php echo json_encode($listaPreguntas); ?>;
        var contador = 0;
        console.log(listaPreguntas);

        function muestra() {
            for ($i = aux; $i < aux + 8; $i++) {
                console.log(listaPreguntas[$i][1]);
                contador = contador + 1;
                if (contador <= listaPreguntas.length) {
                    $("#elementos").append(' <div class="border border-secondary rounded"style="margin:3%; width: 200px; height: 200px;float: left" onclick="muestraObjeto(' + listaPreguntas[$i][5] + ')" ><img src="imagenesArticulos/' + listaPreguntas[$i][1] + '.png" style="width:80%;;height:80%;">' + listaPreguntas[$i][0] + '</div> ');
                }

            }


            //cuando no hay mas articulos que se oculte la flecha de mostrar mas

        }

        function alante() {
            aux = aux + 8;
            muestra();
        }
        function muestraObjeto(_id) {
            $('#cajaElementos').load('cargaObjeto.php', {
                id: _id

            });

        }

//       
//
//
//
//
//            
//
//
        muestra();
    </script>

</html>



