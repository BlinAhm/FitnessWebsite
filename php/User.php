<?php
    abstract class User{
        private $name;
        private $lastName;
        private $email;
        private $password;

        public function __construct($name,$lastName,$email,$password){
            $this->name = $name;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->password = $password;
        }

        abstract function getRole();

        public function getName(){
            return $this->name;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }

        public function __toString(){
            return $this->name." ".$this->lastName;
        }
    }
?>