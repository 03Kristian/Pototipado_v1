<?php 
    require_once("../modelo/usuario.php");
    require_once("../../template/plantillaperfilUsuario.php");
    $modeloUsuario = new Usuario();
?>

<h3>Listado de usuarios </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Direccion</th>
      <th scope="col">Email</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $verUsuarios = $modeloUsuario->getUsuarios();
        foreach ($verUsuarios as $listarUsuario) {
       ?>
            <tr>
                <th scope="row"><?= $listarUsuario['id'];?></th>
                <td><?= $listarUsuario['nombre'];?></td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                  <a href="update.php?=id<?= $listarUsuario['id'];?>" class="btn btn-warning">Editar</a>
                  <a href="delete.php=id<?= $listarUsuario['id']?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php
         
        }
         
        ?>
   
  </tbody>
</table>



    

?>