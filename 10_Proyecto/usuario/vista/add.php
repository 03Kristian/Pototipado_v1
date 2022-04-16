<?php
require_once("../../template/plantillaFormulario.php");
?>
<div class="formulario">

    <h3>Formulario Registro</h3>

    <form action="../controlador/add.php" method="POST">
        <div class="mb-3">
            <label>identificacion</label>
            <input type="number" class="form-control" name="UsuarioId">
            
        </div>
        <div class="mb-3">
            <label>Nombres</label>
            <input type="text" class="form-control" name="Nombre">
        </div>
        <div class="mb-3">
            <label>Apellido</label>
            <input type="text" class="form-control" name="Apellido">
        </div>

        <div class="mb-3">
            <label>Correo</label>
            <input type="email" class="form-control" name="Correo" placeholder="Digite su Correo electronico.." aria-describedby="correoHelp">
        </div>

        <div class="mb-3">
            <label>contrasena</label>

            <input type="password" class="form-control" name="Contrasena" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label>Celular</label>
            <input type="text" class="form-control" name="Celular" placeholder="Digite su numero de Contacto...">
        </div>
        <!-- <div class="mb-3">
                <input type="password" class="form-control" name="contrasena2" placeholder="digite nuevamente contrasena" aria-describedby="emailHelp">
            </div>
        -->
        <div class="mb-3">
            <label><span style="color: red;">Digita una Dirrecion para referencias...</span></label>
            <input type="text" class="form-control" name="Direccion" placeholder="ejem: Cll .. # ..-.. Popayan Cauca">
        </div>

        <div class="mb-3">
            <input type="checkbox" name="#" id="" required><span>Aceptas los terminos y condiciones al momento de tu registro que ofrece PatojoMarket....</span>
        </div>

        <button type="submit" name="btn_enviar" class="btn btn-primary">Registrar</button>
    </form>
</div>