<?php
require_once '../config/Database.php';

class OrdersController{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function readData(){
        $query = $this->db->getPDO()->prepare('SELECT * FROM orders o, users u, memberships m WHERE o.membership_id = m.membership_id AND o.user_id = u.user_Id');
        $query->execute();

        return $query->fetchAll();
    }

    //remove()
    //order()
    //locations
    public function addOrder($request){
        $query = $this->db->getPDO()->prepare('INSERT INTO orders (membership_id, user_id) VALUES (:membershipId, :user_id)');
        $query->bindParam(':membershipId',$request['membershipId']);
        $query->bindParam(':user_id',$request['userId']);
        $query->execute();

        return header('Location: ../pages/Orders.php');
    }
}

?>