


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

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="active">
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
                    <div class="form-inline my-2 my-lg-0 nav-item active">
                        <input id="cajaBusca"oninput="busca()" class="form-control  " type="search" placeholder="Search" aria-label="Search" >
                      
                    </div>
                </div>
            </nav>
        </div>
    <div id="cajaElementos" class="border border-primary row " style="margin-top: 2%; padding-left: 2%;padding-top: 2%" >
           
           
    </div>
    

    <script>
         var _condicion = 0;
        
   $('#cajaElementos').load('cargaArticulos.php',{
       condicion: _condicion
      
       
   });
   
   function busca(){
    var aux= true;
      
      var  _cajaBusqueda = $('#cajaBusca').val();
     _condicion = 1;
     
       $('#cajaElementos').load('cargaArticulos.php',{
           cajabusqueda: _cajaBusqueda,
           condicion: _condicion
       });
       
   }
    </script>

</html>


  








