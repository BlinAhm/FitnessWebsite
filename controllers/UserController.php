<?php
    require_once '../config/Database.php';

    class UserController{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        //CRUD

        public function readData(){
            $query = $this->db->getPDO()->query('SELECT * from users');

            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->getPDO()->prepare('INSERT INTO users (name,lastName,email,password) 
            VALUES (:name,:lastName,:email,:password)');

            $query->bindParam(':name',$request['name']);
            $query->bindParam(':lastName',$request['lastName']);
            $query->bindParam(':email',$request['email']);
            $query->bindParam(':password',$request['password']);
            $query->execute();
            
            return header('Location: ../pages/Users.php');
        }

        public function edit($id){
            $query = $this->db->getPDO()->prepare('SELECT * from users where user_Id = :id');
            $query->bindParam(':id',$id['id']);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->getPDO()->prepare('UPDATE users SET name = :name, lastName = :lastName,
            email = :email, password = :password WHERE id = :id');

            $query->bindParam(':name',$request['name']);
            $query->bindParam(':lastName',$request['lastName']);
            $query->bindParam(':email',$request['email']);
            $query->bindParam(':password',$request['password']);
            $query->bindParam(':id',$id);
            $query->execute();

            return header('Location: Users.php');
        }

        public function delete($id){
            $query = $this->db->getPDO()->prepare('DELETE from menu where id = :id');
            $query->bindParam(':id',$id);
            $query->execute();

            return header('Location: Users.php');
        }
    }
?>