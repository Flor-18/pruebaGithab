<?php
    class db{ 
        private $host = "localhost:8080";
        private $dbname = "dbcolegio";
        private $user = "root";
        private $pass = "";
        public function conexion():PDO{ 
            try {
                $PDO= new PDO("mysql:host =  ".$this->host.";dbname=".
                $this->dbname, username: $this->user, password: $this->pass);
                $PDO->setAttribute(attribute: PDO::ATTR_ERRMORE, value:
                 PDO::ERRMORE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception("Error al conectar la base 
                de datos". $e->getMessage());
                
            }
         }
     }

?>