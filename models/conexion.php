<?php 
    class Conexion{
        private $host;
        private $user;
        private $password;
        private $bd;

        public function __construct()
        {
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "Ledrazor8##";
            $this->bd = "cedral_db";
        }

        public function connect()
        {
            try{
                $conexion = "mysql:host=".$this->host.";dbname=".$this->bd.";charset=utf8";
                $atributos = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
                $objectPDO = new PDO($conexion,$this->user,$this->password,$atributos);
                
                return $objectPDO;
            }catch(PDOException $e){
                die("ERROR : ".$e->getMessage());
            }   
        }

    }

?>