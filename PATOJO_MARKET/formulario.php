<?php

require_once("plantillas/registro.php");

?>
<title>REGISTRATE</title>
<div class="formulario">
<form action="" method=""> 
   <h3> REGISTRO </h3>
    
    <div class="mb-3">
        <label>Tipo de documento</label>
        <input type="text" class="form-control" neme="nombre" aria-describedby="id">
         <!--<select name="tipo de documento" id="tipo de documento" class="text-tipo de documento">
                        <option value="category">--</option>
                        <option value="Cedula">Cedula</option>
                        <option value="Tarjeta de Extranjeria">Tarjeta de Extranjeria</option>
                        <option value="Pasaporte">Pasaporte</option> 
      </div> -->
    
  
    <div class="mb-3">
    <label>Nombre</label>
        <input type="Nombre" class="form-control" neme="Nombre" placeholder="Nombre" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label>Apellido</label>
        <input type="text" class="form-control" neme="password" aria-describedby="emailHelp">
    </div> 
    <div class="mb-3">
        <label>Celular</label>
        <input type="text" class="form-control" neme="password" aria-describedby="emailHelp">
    </div> 
    <div class="mb-3">
        <label>Email</label>
        <input type="text" class="form-control" neme="Email" aria-describedby="emailHelp">
    </div> 
    <div class="mb-3">
        <label>contraseña</label>
        <input type="text" class="form-control" neme="password" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>