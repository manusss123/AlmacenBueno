


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
                            <a id="inventario"class="nav-link"style="cursor:pointer"onclick="inventario()" >Inventario</a>
                        </li>
                        <li class="nav-item active">
                            <a id="usuarios" class="nav-link active" href="#">Usuarios</a>
                        </li>
                        <li class="active">
                            <a id="inventario"class="nav-link"style="cursor:pointer"onclick="" >Registros</a>
                        </li>
                        <li class="nav-item active">
                            
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0 nav-item active">
                        <input id="cajaBusca"oninput="busca()" class="form-control  " type="search" placeholder="Search" aria-label="Search" >

                    </div>
                </div>
            </nav>
        </div>
        <div id="cajaElementos" class="border border-primary row " style="margin-top: 2%;" >
            <div style="margin-left: 70%; margin-top: 1.5%">
                <select class="form-control" onchange="cambiaCategoria()" id="categorias">
                    <option>Todas</option>
                    <option>Fotografia</option>
                    <option>Deporte</option>
                    <option>Material Escolar</option>
                    <option>Informatica</option>
                </select>
            </div>
            <div style="margin-top: 1.5%">

                <a class="btn "onclick="cuadradotrue()"><img src="imagenUsuarios/cuadrados.png"style="height: 20px; width: 20px;"></a>
                <a class="btn "onclick="cuadradofalse()"><img src="imagenUsuarios/rayashorizontales.png"style="height: 20px; width: 20px;  "></a>
                <a class="btn "data-toggle="modal" data-target="#myModal"><img src="imagenUsuarios/mas.png"style="height: 20px; width: 20px;  "></a>

            </div>
            <div id="cajaElementos2"  style=" padding-left: 2%;padding-top: 2%;" >

            </div>
            <div>    
                <a id="flecha" class="btn btn-primary" onclick="alante()" style="margin-left: 49%; height: 70px;"  >|<br>v </a>
            </div>
        </div>



        <!--moodaaaaal boostrap -->
        <div class="modal" tabindex="-1" id="myModal" >
            <div class="modal-dialog " >
                <div class="modal-content" >
                    <div class="modal-header">
                        <h6 class="modal-title" >Añadir Nuevo articulo </h6>
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>

                    </div>
                    <div class="modal-content"style="padding: 2%">
                        Nombre:    <input id="cajaCatidad" class="form-control"><br>
                        Categoria:    <input id="cajaCatidad" class="form-control"><br>
                        Stock:    <input id="cajaCatidad" class="form-control"><br>
                        Numserie: <input id="cajaNumSerie"class="form-control"><br>
                        Imagen: <input id="cajaCategoria" class="form-control" ><br>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="añade()"data-dismiss="modal" >Añadir</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar </button>
                    </div>
                </div>

            </div>
        </div>


        <script>
            var _condicion = 0;

            $('#cajaElementos2').load('cargaArticulos.php', {
                condicion: _condicion


            });

            function busca() {
                var aux = true;

                var _cajaBusqueda = $('#cajaBusca').val();
                _condicion = 1;

                $('#cajaElementos2').load('cargaArticulos.php', {
                    cajabusqueda: _cajaBusqueda,
                    condicion: _condicion
                });

            }

            function inventario() {
                $('#cajaElementos2').load('cargaArticulos.php', {
                    condicion: _condicion


                });
            }
            function cambiaCategoria() {
                var _categoria = $('#categorias').val();
                var _condicion = 2;
                $('#elementos').empty();
                $('#cajaElementos2').load('cargaArticulos.php', {
                    categoria: _categoria,
                    condicion: _condicion

                });
            }

        </script>

</html>











