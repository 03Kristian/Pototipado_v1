<?php 
    class Conexion{

        protected $db;
        private $driver     = "mysql";
        private $host       = "localhost";
        public $based       = "patojomarket";
        private $usuario    = "root";
        private $contrasena = "";
        
        public function __construct()
        {
            try {
                //$db permite crear una instancia a la clase PDO y enviar los atributos 
                // driver, host, based, usuario..
                $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->based}", 
                $this->usuario, $this->contrasena);
                //setAttribute verificar o traer los posibles errores en la conexion 
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "conexion exitosa";
                return $db;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al conectarse a la Bd".$e->getMessage();
            }
        }

    }// end clase

    /* $conectarDb = new Conexion();
    print_r($conectarDb);  */


?>