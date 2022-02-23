<?php
    require_once '../config/Database.php';

    class AdminController{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        //CRUD

        public function readData(){
            $query = $this->db->getPDO()->query('SELECT * from admin');

            return $query->fetchAll();
        }
        public function readAdmins(){
            $query = $this->db->getPDO()->query('SELECT * from admin, users WHERE admin.user_Id = users.user_Id');
            
            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->getPDO()->prepare('INSERT INTO admin (user_id) 
            VALUES (:user)');

            $query->bindParam(':user',$request['userId']);
            $query->execute();
            
            return header('Location: ../pages/Admin.php');
        }

        public function delete($id){
            $query = $this->db->getPDO()->prepare('DELETE from admin where user_Id = :id');
            $query->bindParam(':id',$id['deleteId']);
            $query->execute();

            return header('Location: Admin.php');
        }
    }
?>