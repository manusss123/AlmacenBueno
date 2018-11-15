<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>ALMACEN UFV</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/miCss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color:#E7ECF1">
        <div id="principal" class="container"style="background-color:#5784B1">

            <div id="titulo" class="text-center">
                <p><h1>ALMACEN UFV</h1></p>
            </div>
            <div id="contenedor" class="text-center" >
                <div style="">
                    <p id="botonAlmacen" class="btn btn-light align-content-center " >ADMINISTRADOR</p>
                    <p id="botonTienda" class="btn btn-light align-content-center " >TIENDA</p>

                </div>

            </div>
        </div>

    </body>

    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script scr="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>

        $('#botonAlmacen').click(function () {
            $('#contenedor').load("loginAlmacenAdmin.php", {

            });
        });


    </script>

</html>
