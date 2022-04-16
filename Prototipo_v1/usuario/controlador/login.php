<?php
    require_once("../modelo/usuario.php");

    if (isset($_REQUEST["btn_enviar"])==1) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $loginUsuario = new Usuario();
        $loginUsuario->login($email,$password);

        if (isset($loginUsuario)==1) {

            //print_r($verloginUsuario);
            //terminar el proceso de ejecucion de codigo hasta este punto
            //die();
            //header me permite ir a otro archivo 

            header('Location: ../vista/index.php');
        }else{
            header('Location: ../../Index.php');
        }
    }
?>
