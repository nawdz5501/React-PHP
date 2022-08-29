<?php
    class Post{
        private $conn;
        public $post_id;
        public $title;
        public $post_tag;
        public $body;
        public $image_url;
        public $created_at;
        public function __construct($db){
            $this->conn=$db;
        }
        function getAllPosts(){
            $query="SELECT * FROM posts";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
            
        }

        public function getPostById($id){
            $query="SELECT * FROM posts WHERE post_id='$id'";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;

            
        }
        public function getTags(){
            $query="SElECT tag_name from tag";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        function createPost(){
            $query="INSERT INTO posts(title,body,image_url,tag) values('$this->title','$this->body','$this->image_url','$this->post_tag')";
            $stmt=$this->conn->prepare($query);
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
        }
    }