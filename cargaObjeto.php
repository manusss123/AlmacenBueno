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
        <div  class="border border-primary"style="height: 400px; width: 400px; float: left">
            <img id="imagen" src="imagenArticulos/<?php echo $imagen; ?>" style="width: 395px;height: 350px"> 
        </div>
        <div id="formulario" style="margin-left: 30px;float: left">
            <div id="texto" >Nombre: <?php echo $nombre; ?></div>
            <div>
                Stock:    <input class="form-control"value="<?php echo $cantidad; ?>"><br>
                Numserie: <input class="form-control"value="<?php echo $num_serie; ?>"><br>
                Categoria: <input class="form-control" value="<?php echo $categoria; ?>"><br>
                <label for="input-24">Elije tu nueva foto</label>
                <input id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true">               
            </div>


        </div>
    </div>








    <script>
        var listaArticulo = <?php echo json_encode($listaPreguntas); ?>;
        
    </script>
    </>
</html>



