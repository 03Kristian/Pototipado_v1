<?php
    require_once("../../template/plantillaFormulario.php");
    require_once("../Modelo/Comprador.php");
    //session_start();
    $modeloUsuario = new Usuario();
    $modeloUsuario->validar_Login();
    $vernombreUsuario = $modeloUsuario->getEmail();
    
?>

<div>
    <h2>Bienvenido <?= print_r($vernombreUsuario); ?> </h2>
    <h2><a href="../vista/login.php"> Salir </a> </h2>
</div>