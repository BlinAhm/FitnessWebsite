<?php
    class Database{
        private $pdo;

        public function __construct(){
            try{
                session_start();
                $link = new PDO('mysql:host=localhost;dbname=rebuildfit','root','');
                $this->pdo = $link;
            }catch(PDOException $exception){
                die($exception->getMessage());
            }
        }

        public function getPDO(){
            return $this->pdo;
        }
    }
?>