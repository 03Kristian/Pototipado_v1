<?php 
    require_once("../modelo/usuario.php");

    if (isset($_REQUEST["btn_enviar"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $modeloUsuario = new Usuario();

        $modeloUsuario->insertarUsuario($nombre, $email, $password);

        if(isset($modeloUsuario)){
            echo"Registro de usuario satisfactorio..";
            header('refresh:3; url=../vista/add.php');
        }else{
            echo"Fallo al insertar registro..";
            header('refresh:2; url=../../Index.php');
        }
          
    }
?>