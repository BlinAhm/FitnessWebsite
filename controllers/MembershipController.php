<?php
require_once '../config/Database.php';

class MembershipController{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function readData(){
        $query = $this->db->getPDO()->query('SELECT * FROM memberships');
        $query->execute();

        return $query->fetchAll();
    }

    public function addMembership($request){
        $query = $this->db->getPDO()->prepare('INSERT INTO memberships (type,price,validity) VALUES (:type, :price, :validity)');
        $query->bindParam(':type',$request['type']);
        $query->bindParam(':price',$request['price']);
        $query->bindParam(':validity',$request['validity']);
        $query->execute();

        return header("Location: ../pages/MembershipDash.php");
    }

    public function removeMembership($request){
        $query = $this->db->getPDO()->prepare('DELETE FROM memberships WHERE membership_id = :id');
        $query->bindParam(':id',$request['deleteId']);
        $query->execute();

        return header("Location: ../pages/MembershipDash.php");
    }
}
?>