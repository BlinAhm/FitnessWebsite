<?php
require_once '../config/Database.php';

class ActivityController{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function readData(){
        $query = $this->db->getPDO()->query('SELECT * FROM activity');
        $query->execute();

        return $query->fetchAll();
    }

    public function membershipAdd($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' added a new Membership: '.$request['type'].' - '.$request['price'].' € - '.$request['validity'].' Months.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function membershipRemove($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' removed a Membership: Id - '.$request['deleteId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function orderAdd($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' added a new Order: User Id - '.$request['userId'].', Membership Id - '.$request['membershipId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function orderRemove($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' removed an Order: Id - '.$request['deleteId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }

    public function contactRemove($name,$lastName,$request){
        $query = $this->db->getPDO()->prepare('INSERT INTO activity (activity) VALUES (:activity)');
        $added = $name.' '.$lastName.' removed a Contact: Id - '.$request['deleteId'].'.';
        $query->bindParam(':activity',$added);
        $query->execute();
    }
}

?>