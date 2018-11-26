
<?php
$resultadoQueryy = $mysqli->query("SELECT * FROM articulosBuena  ");
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
function buscaQuery($busqueda) {
   $listaBusqueda = array();
    $consulta = $mysqli->query("SELECT * FROM articulosBuena WERE Nombre ='$busqueda'% ");
   
    $numPreguntas = $resultadoQueryy->num_rows;
    
    for ($i = 0; $i < $numPreguntas; $i++) {
    $r = $resultadoQueryy->fetch_array(); //leo una fila del resultado de la query
    $listaPreguntas[$i][0] = $r['Nombre'];
    $listaPreguntas[$i][1] = $r['Imagen'];
    $listaPreguntas[$i][2] = $r['Num_Serie'];
    $listaPreguntas[$i][3] = $r['Cantidad'];
    $listaPreguntas[$i][4] = $r['Categoria'];
    $listaPreguntas[$i][5] = $r['Id'];


}

}

//print_r($listaPreguntas);
?>
<html>
<div id="principal" class="container">
<div id="titulo" class="text-center" style="background-color:#5784B1">
        <p><h1>ALMACEN UFV</h1></p>
    </div>
    <div id="contenedor" class="text-center" style="margin-top:0.75%" style="background-color:#5784B1; size: 40%">
            <nav class="navbar navbar-expand-lg navbar-light "style="background-color:#5784B1">
                <a class="navbar-brand" href="index.php">Login</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a id="inventario"class="nav-link" >Iventario</a>
                        </li>
                        <li class="nav-item active">
                            <a id="categorias"  class="nav-link "  role="button" >
                                Categorias
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a id="usuarios" class="nav-link active" href="#">Usuarios</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <input id="cajaBusca" class="form-control " type="search" placeholder="Search" aria-label="Search" onclick="busca()">
                        
                    </div>
                </div>
            </nav>
        </div>
    <div id="cajaElementos" class="border border-primary row " style="margin-top: 2%; padding-left: 2%;padding-top: 2%" >
           
           

    </div>
            <div style="margin-left: 45%; margin-top: 3%">
                <a id="flecha" class="btn btn-primary" onclick="alante()" >|<br>v </a>
                
               
            </div>
       
    </div>

    <script>
    
    var aux=0;
    var numerocuadrados = 22;
     var listaPreguntas = <?php echo json_encode($listaPreguntas); ?>;
    var contador = 0;
            console.log(listaPreguntas);

    function muestra(){
    for ($i = aux; $i < aux+8; $i++) {
          console.log(listaPreguntas[$i][1]);
           contador = contador +1;
           if(contador<=listaPreguntas.length){
            $("#cajaElementos").append(' <div class="border border-secondary rounded"style="margin:3%; width: 200px; height: 200px;float: left" ><img src="imagenesArticulos/'+listaPreguntas[$i][1]+'.png" style="width:80%;;height:80%;">'+listaPreguntas[$i][0]+'</div> ');
        }
        }
        if(aux>=listaPreguntas.length){
              document.getElementById('flecha').style.display = 'none';

    }
}
    function alante(){
        aux = aux +8;
        muestra();
    }
   function busca(){
       var aux=true;
       while(aux){
          
          <?php buscaQuery($busqueda) ?>
        
           
        
    }
 
   
     muestra();
    </script>

</html>


  








