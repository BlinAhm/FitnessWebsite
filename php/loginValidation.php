<?php
    class LoginValidate{

        public function __construct(){
            $isAlpha = '/^[a-zA-Z\s]+$/';
            $isEmail = '/^[\S]+@[\S]+\.[a-zA-Z]{2,3}$/';
            $isPassword = '/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[\W]).{6,})\S$/';
        
            if(preg_match($isAlpha,$_POST['name']) && preg_match($isAlpha,$_POST['lName']) && preg_match($isEmail,$_POST['email']) 
            && preg_match($isPassword,$_POST['pass']) && $_POST['pass'] == $_POST['cpass']){
                session_start();
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['lastName'] = $_POST['lName'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['pass'];
                $_SESSION['role'] = 1;
                header("Location: Home.php");
            }
        }
    }
?>