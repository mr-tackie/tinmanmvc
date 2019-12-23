<?php
    class Post{
        private $db;

        public function __construct(){
            $this->db = new DB;
        }

        public function getPosts(){
            $this->db->query("SELECT * FROM posts");

            return $results = $this->db->resultSet();
        }
    }
?>