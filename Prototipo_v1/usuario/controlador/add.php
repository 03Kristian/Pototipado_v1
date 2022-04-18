<?php 
    require_once("../modelo/usuario.php");

    if (isset($_REQUEST["btn_enviar"])) {
        $modeloUsuario = new Usuario();
        $Id = $_POST["UsuarioId"];
        $nombre = $_POST["Nombre"];
        $apellido = $_POST["Apellido"];
        $correo = $_POST["Correo"];
        $contrasena = $_POST["Contrasena"];
        $cell = $_POST["Celular"];
        $ubicacion = $_POST["Direccion"];
        $modeloUsuario->insertarUsuario($Id, $nombre, $apellido, $correo, $contrasena, $cell, $ubicacion);

        print_r($modeloUsuario);
         if(isset($modeloUsuario)==1){
            echo"Registro de usuario satisfactorio..";
            header('refresh:3; url=../vista/add.php');
        }else{
            echo"Fallo al insertar registro..";
            header('refresh:2; url=../../Index.php');
        } 
          
    }
?>