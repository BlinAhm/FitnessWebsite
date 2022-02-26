<?php
require_once '../config/Database.php'

class OrdersController{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function addOrder($request){
        $query = $this->db->getPDO()->prepare('INSERT INTO orders (membership_id, user_id) VALUES (:membership_id, :user_id)');
        $query->bindParam(':membership_id',$request['membership_id']);
        $query->bindParam(':user_id',$_SESSION['id']);
    }
}

?>