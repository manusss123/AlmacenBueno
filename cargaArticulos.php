<?php
//inicia la sesión del navegador en el servidor PHP
//o la continúa si ya estuviera iniciada
include ('misFunciones.php');

$condicion = $_POST['condicion'];
$mysqli = conectaBBDD();

if ($condicion == 1) {
    $cajaBusqueda = $_POST['cajabusqueda'];
    $resultadoQueryy = $mysqli->query("SELECT * FROM articulosBuena WHERE Nombre LIKE '$cajaBusqueda%' ");
}
else if($condicion == 2) {
    $categoria = $_POST['categoria'];
    $resultadoQueryy = $mysqli->query("SELECT * FROM articulosBuena WHERE Categoria LIKE '$categoria' ");
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

       
    </div>
     


      

    <script>
        var cuadrados = true;
        var aux = 0;
        var numerocuadrados = 22;
        var listaPreguntas = <?php echo json_encode($listaPreguntas); ?>;
        var contador = 0;
        console.log(listaPreguntas);
        function cuadradotrue() {
            cuadrados = true;
            aux = 0;
            contador = 0;

            $('#elementos').html('');
            muestra();
        }
        function cuadradofalse() {
            cuadrados = false;
            aux = 0;
            contador = 0;
            $('#elementos').html('');

            muestra();
        }
        function muestra() {
            var cadena = "";
            for ($i = aux; $i < aux + 8; $i++) {
                console.log(listaPreguntas[$i][1]);
                contador = contador + 1;
                if (contador <= listaPreguntas.length) {
                    if (cuadrados == true) {
                        $("#elementos").append(' <div class="border border-secondary rounded"style="cursor:pointer;margin:3%; width: 200px; height: 200px;float: left" onclick="muestraObjeto(' + $i + ')" ><img src="imagenArticulos/' + listaPreguntas[$i][1] + '" style="width:80%;;height:80%;">' + listaPreguntas[$i][0] + '</div> ');
                    }
                    if (cuadrados == false) {
                        $("#elementos").append(' <div class="border border-secondary rounded"style="cursor:pointer;margin:2%; width: 90%; height: 50px;float: left" onclick="muestraObjeto(' + $i + ')" ><img src="imagenArticulos/' + listaPreguntas[$i][1] + '" style="width:7%;height:90%; margin-right:20%;">' + listaPreguntas[$i][0] + '<a style:"margin-left:20px" >uds: ' + listaPreguntas[$i][3] + '</a> </div> ');
                    }

                }
            }
        }
        function alante() {
            aux = aux + 8;
            muestra();
        }
        function muestraObjeto(x) {
            var _nombre = listaPreguntas[x][0];
            var _imagen = listaPreguntas[x][1];
            var _num_serie = listaPreguntas[x][2];
            var _cantidad = listaPreguntas[x][3];
            var _categoria = listaPreguntas[x][4];
            var _id = listaPreguntas[x][5];

            $('#cajaElementos').load('cargaObjeto.php', {
                nombre: _nombre,
                imagen: _imagen,
                num_serie: _num_serie,
                cantidad: _cantidad,
                categoria: _categoria,
                id: _id
            });
        }
     
        muestra();
    </script>

</html>



