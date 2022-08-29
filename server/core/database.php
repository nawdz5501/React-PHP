<?php
    class Database {
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $database ='news-blog';
        private $conn;
        public function connect(){
            $this->conn=null;
            try{
                $this->conn=new PDO("mysql:host=".$this->host.";dbname=".$this->database,$this->user,$this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Kết nối thất bại" . $e->getMessage();
            }
            return $this->conn;
        }
        public function disconnect(){
            $conn=null;
            return $conn;
        }
    
    }