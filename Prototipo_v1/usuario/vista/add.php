<?php
require_once("../../template/plantillaFormulario.php");
?>
<div class="formulario">

    <h3>Formulario Registro</h3>

<form action="../controlador/add.php" method="POST" >
    <div class="mb-3">
        <label>Nombres completos</label>
        <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email.." aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="password2" placeholder="digite nuevamente password" aria-describedby="emailHelp">
    </div>
    

    <button type="submit" name="btn_enviar" class="btn btn-primary">Registrar</button>
</form>
</div>