<div style="background-color:#5784B1">
    
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input id="cajaNombre"type="email" class="form-check-label" id="cajaUsuario" aria-describedby="emailHelp" placeholder="Enter email" style="margin-top: 2%">
  </div>
         <div class="form-group" style="margin-right: 2.7%">
    <label for="exampleInputPassword1">Password</label>
    <input id="cajaPassword" type="password" class="form-check-label" id="cajaContraseña" placeholder="Password">
  </div>
 
        <button id="boton1"type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script> 
$('#boton1').click(function () {
            //leo el contenido de las cajas de nombre y contraseña
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaPassword = $('#cajaPassword').val();

            $('#principal').load("login.php", {
                cajaNombre: _cajaNombre,
                cajaPassword: _cajaPassword
            });
        });


</script>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

