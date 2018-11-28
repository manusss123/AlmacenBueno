<?php 



?>
<html>
 
    <div> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
             <li class="nav-item">
                <a id="Almacen" class="nav-link" href="#">Almacen</a>
            </li>
            <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <ul class="dropdown-menu">
                        <li><a  href="#">Forografia</a></li>
                        <li><a  href="#">Deporte</a></li>
                        <li><a  href="#">Informatica</a></li>
                        <li> <a href="#">Material Escolar</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>   
    <div id="articulos" style="width: 100% ; height: 100%; float:left; align-content: center">
                
    </div> 
   
    </div>
   <script>
         $('#Almacen').click(function () {
            $('#principal').load("loginAlmacenAdmin.php", {

            });
        });
        
       var _condicion =0;
       $('#articulos').load('cargaArticulos.php',{
       condicion: _condicion  
   });
        
       </script>
</html>