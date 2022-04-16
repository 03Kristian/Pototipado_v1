<?php 
    require_once("../../conexion/conexion.php");
    session_start();

    class Usuario extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function login($correo, $contrasena){
            $tabla = $this->db->prepare("SELECT correo, contrasena FROM usuario 
            WHERE  correo = :correo AND contrasena = :contrasena");
            $tabla->bindParam(':correo', $correo);
            $tabla->bindParam(':contrasena', $contrasena);
            $tabla->execute();
            //rowCount busca en la tabla una coincidencia si la encontro = 1
            if ($tabla->rowCount()==1) {
                $loginUsuario = $tabla->fetch();
                $_SESSION['correo'] = $loginUsuario['correo'];
                echo "Inicio de sesión Satisfactorio!!";
            }else{
                echo "Fallo al iniciar sesión. Verifique sus datos";
            }

        }//end login

        public function insertarUsuario($Id, $nombre,$apellido, $correo, $contrasena,$cell, $ubicacion){
            //prepare prepara la consulta SQL enviada ->Insert Into
            $tabla = $this->db->prepare("INSERT INTO usuario VALUES (UsuarioId,Nombre,Apellido,Correo,Contrasena,Celular,Direccion) 
            VALUE(:UsuarioId, :Nombre, :Apellido, :Correo, :Contrasena,:Celular, :Direccion)");
            $tabla->bindParam(':UsuarioId', $Id);
            $tabla->bindParam(':Nombre', $nombre);
            $tabla->bindParam(':Apellido', $apellido);
            $tabla->bindParam(':Correo', $correo);
            $tabla->bindParam(':Contrasena', $contrasena);
            $tabla->bindParam(':Celular',$cell);
            $tabla->bindParam(':Direccion',$ubicacion);
            $tabla->execute();
            /* if ($tabla->execute()==1) {
                
                echo "Registro exitoso!!";
                header('refresh:3 Location: ../Vista/perfil.php');
            }else{
                header('Location:../Vista/add.php');
            } */
        }

        public function validar_Login(){
            if ($_SESSION['Correo']==Null) {

               /* header('Location: ../../index.php'); */
            }
        }

       public function getEmail(){
            return $_SESSION['Correo'];
        } 

        public function exit(){
            //session_start();
            unset($_SESSION["Correo"]);
            session_destroy();
            header('refresh:3 url=../../index.php');
            //header("refresh:3; url=../");
            echo "Terminando ...";
        
        }

        //VER TODOS LOS USUARIOS
        public function getUsuarios(){
            $rows = Null;
            $tabla = $this->db->prepare("SELECT id,identificacion, nombre, apellido, correo, contrasena FROM usuario");
            $tabla->execute();
            while ($result = $tabla->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }


    }//end clase

?>