<?php
    include 'User.php';

    class BasicUser extends User{
        private $role = 0;

        public function __construct($name,$lastName,$email,$password){
            parent::__construct($name,$lastName,$email,$password);
        }

        public function getRole(){
            return $this->role;
        }
    }
?>