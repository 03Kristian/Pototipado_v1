<?php 
    require_once("../../conexion/conexion.php");
    session_start();

    class Usuario extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function login($email, $password){
            $tabla = $this->db->prepare("SELECT Correo, Contrasena FROM usuario 
            WHERE Correo = :Correo AND Contrasena =:Contrasena");
            $tabla->bindParam(':Correo', $email);
            $tabla->bindParam(':Contrasena', $password);
            $tabla->execute();
            //rowCount() busca en la tabla una coincidencia si la encontro == 1
            if($tabla->rowCount()==1) {

                $loginUsuario = $tabla->fetch();
                $_SESSION['Correo'] = $loginUsuario['Correo'];
                echo "Inicio de sesión Satisfactorio!!";
            }else{
                echo "Fallo al iniciar sesión. Verifique sus datos";
            }

        }//end login

        public function insertarUsuario($nombre, $email, $password){
            //prepare prepara la consulta SQL enviada ->Insert Into
            $tabla = $this->db->prepare("INSERT INTO usuario(nombre, email, password) 
            VALUE(:nombre, :email, :password)");
            $tabla->bindParam(':nombre', $nombre);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();
        }

        //VER TODOS LOS USUARIOS
        public function getUsuarios(){
            $rows = Null;
            $tabla = $this->db->prepare("SELECT UsuarioId, Nombre, Correo, Contrasena FROM usuario");
            $tabla->execute();
            while ($result = $tabla->fetch()) {
                $rows[] = $result;
            }
            return $rows;
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

    }//end clase

?>