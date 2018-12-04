<?php
include ('misFunciones.php');


$mysqli = conectaBBDD();

$nombre = $_POST['nombre'];
$imagen = $_POST['imagen'];
$num_serie = $_POST['num_serie'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$id = $_POST['id']
?>
<html>
    <div id="contenido"  >
         <a class="btn" onclick="cargaArticulo()"> <img src="imagenUsuarios/flecha atras.jpg" style="width: 60px; height: 40px;" ></img></a>
        <div  class="border border-primary"style="height: 400px; width: 400px; float: left">
            <img id="imagen" src="imagenArticulos/<?php echo $imagen; ?>" style="width: 395px;height: 350px"> 
        </div>
        <div id="formulario" style="margin-left: 30px;float: left">
            <div id="texto" >Nombre: <?php echo $nombre; ?></div>
            <div>
                Stock:    <input id="cajaCatidad" class="form-control"value="<?php echo $cantidad; ?>"><br>
                Numserie: <input id="cajaNumSerie"class="form-control"value="<?php echo $num_serie; ?>"><br>
                Categoria: <input id="cajaCategoria" class="form-control" value="<?php echo $categoria; ?>"><br>
                <label for="input-24">Elije tu nueva foto</label>
                <input id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true">               
                <a class="btn btn-file" onclick="actualiza()">Guardar</a>
            </div>


        </div>
    </div>








    <script>
            var Cantidad = $('#cajaCatidad').val();
            var NumSerie = $('#cajaNumSerie').val();
            var Categoria = $('#cajaCategoria').val();
    var listaArticulo = <?php echo json_encode($listaPreguntas); ?>;
        function actualiza(){
            var _cajaCantidad = $('#cajaCatidad').val();
            var _cajaNumSerie = $('#cajaNumSerie').val();
            var _cajaCategoria = $('#cajaCategoria').val();
        $('#contenido').load("actualizaArticulo.php", {
            cajaCantidad: _cajaCantidad,
            cajaNumSerie: _cajaNumSerie,
            cajaCategoria: _cajaCategoria;
        });
        }
        function cargaArticulo(){
            $('#contenido').load('cargaArticulos.php');
        }
    </script>
    </>
</html>



