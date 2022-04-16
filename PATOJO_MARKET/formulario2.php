<?php

require_once("plantillas/inicioSesion.php");

?> 


<title>inicio sesión</title>
<div class="formulario">
<form action="" method=""> 
   <h3> Iniciar Sesión </h3>
    
    <div class="mb-3">
    <label>Email</label>
        <input type="Email" class="form-control" neme="Email" placeholder="Email" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label>contraseña</label>
        <input type="text" class="form-control" neme="password" aria-describedby="emailHelp">
    </div> 
    
    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
</form>
</div>