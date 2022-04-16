<?php
    require_once("../modelo/usuario.php");

    if (isset($_REQUEST["btn_enviar"])==1) {
        $correo = $_POST["correo"];
        $cotrasena = $_POST["contrasena"];
        $loginUsuario = new Usuario();
        $loginUsuario->login($correo,$contrasena);

        if (isset($loginUsuario)==1) {
            //print_r($verloginUsuario);
            //terminar el proceso de ejecucion de codigo hasta este punto
            //die();
            //header me permite ir a otro archivo 
            header('Location: ../vista/perfil.php');
        }else{
            header('Location: ../../Index.php');
        }
    }
?>