<?php
    include 'User.php';

    class Admin extends User{
        private $role = 1;

        public function __construct($name,$lastName,$email,$password){
            parent::__construct($name,$lastName,$email,$password);
        }

        public function getRole(){
            return $this->role;
        }
    }
?>