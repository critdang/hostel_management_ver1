<?php 

    require_once('models/UserModel.php');
    class UserController
    {
        public function getUser() {
            $username = isset($_POST['username'])? $_POST['username']: '';
            $password = isset($_POST['password'])? $_POST['password']: '';
            if($password != '' && $username != '') {

            }else {
                require_once('views/Login.php');
            }
        }
    }
?>