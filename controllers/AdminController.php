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
        public function insertActivity(){
            $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
            $name = $this->db->getPDO()->query('SELECT name, lastName FROM users where :userID = user_id');
            $query->bindParam(':userID',$_GET['userID']);
            $query->bindParam(':activity',)
        }

        public function edit($id){
            $query = $this->db->getPDO()->prepare('SELECT * from admin where admin_Id = :id');
            $query->bindParam(':id',$id['id']);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->getPDO()->prepare('UPDATE admin SET name = :name, lastName = :lastName,
            email = :email, password = :password WHERE admin_Id = :id');

            $query->bindParam(':name',$request['name']);
            $query->bindParam(':lastName',$request['lastName']);
            $query->bindParam(':email',$request['email']);
            $query->bindParam(':password',$request['password']);
            $query->bindParam(':id',$id['id']);
            $query->execute();

            return header('Location: Admin.php');
        }

        public function delete($id){
            $query = $this->db->getPDO()->prepare('DELETE from admin where admin_Id = :id');
            $query->bindParam(':id',$id['deleteId']);
            $query->execute();

            return header('Location: Admin.php');
        }
    }
?>