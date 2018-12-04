<?php
include ('misFunciones.php');


$mysqli = conectaBBDD();

$nombre = $_POST['nombre'];
$imagen = $_POST['imagen'];
$num_serie = $_POST['num_serie'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$id = $_POST['id'];
?>
<html>
    <div id="contenido" >
        <a class="btn" onclick="cargaArticulo()"> <img src="imagenUsuarios/flecha atras.jpg" style="width: 60px; height: 40px;" ></a>
        <div  class="border border-primary"style="height: 400px; width: 400px; float: left">
            <img id="imagen" src="imagenArticulos/<?php echo $imagen; ?>" style="width: 395px;height: 350px"> 
        </div>
        <div id="formulario" style="margin-left: 30px;float: left">
            <div id="texto" >Nombre: <?php echo $nombre; ?></div>
            <div>
                Stock:    <input id="cajaCatidad" class="form-control"value="<?php echo $cantidad; ?>"><br>
                Numserie: <input id="cajaNumSerie"class="form-control"value="<?php echo $num_serie; ?>"><br>
                Categoria: <input id="cajaCategoria" class="form-control" value="<?php echo $categoria; ?>"><br>
                Hacer Pedido: <a class="btn btn-info" onclick="actualiza()">Guardar</a>
                <a class="btn btn-info" onclick="actualiza()">Guardar</a>
            </div>


        </div>
    </div>








    <script>
        var Cantidad = $('#cajaCatidad').val();
        var NumSerie = $('#cajaNumSerie').val();
        var Categoria = $('#cajaCategoria').val();
        function actualiza() {
            var _cajaCantidad = $('#cajaCatidad').val();
            var _cajaNumSerie = $('#cajaNumSerie').val();
            var _cajaCategoria = $('#cajaCategoria').val();
            var _id = <?php echo $id; ?>;
            $('#contenido').load("actualizaArticulo.php", {
                cajaCantidad: _cajaCantidad,
                cajaNumSerie: _cajaNumSerie,
                cajaCategoria: _cajaCategoria,
                id: _id
            });
        }
        function cargaArticulo() {
            $('#contenido').load('paginaAlmacen.php');

        }
    </script>

</html>



