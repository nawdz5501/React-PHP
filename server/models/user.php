<?php
    class User{
        private $conn;
        public $user_id;
        public $user_name;
        public $email;
        public $password;
        public function __construct($db){
            $this->conn=$db;
        }
        //READ
        public function getAllUsers(){
            $query="SELECT * FROM users";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            
            return $stmt;
            
        }

        function isAlreadyExist(){
            $query = "SELECT *
                FROM
                    users
                WHERE
                    user_name='".$this->user_name."'";
            // prepare query statement
            $stmt = $this->conn->prepare($query);
            // execute query
            $stmt->execute();
            if($stmt->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }

        function register(){
    
            if($this->isAlreadyExist()){
                return false;
            }else{
            
            $query = "INSERT INTO
                        users(user_name,user_email,user_password)
                    values
                        ('$this->user_name','$this->email','$this->password')";
            $stmt = $this->conn->prepare($query);
            $this->user_name=htmlspecialchars(strip_tags($this->user_name));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->password=htmlspecialchars(strip_tags($this->password));
            if($stmt->execute()){
               
                return true;
        
            }
        }
        }
        function login(){
            $query="SELECT * FROM users where user_name='$this->user_name' and user_password='$this->password'";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
            
        }
    }