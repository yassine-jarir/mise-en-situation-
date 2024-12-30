<?php
class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

   
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userName = $_POST['userName'];
            $email = $_POST['email'];
            $passwords = $_POST['passwords'];
            $this->user->create($userName, $email,$passwords);
            header('Location: index.php');
        }
        include 'views/add.php';
    }

 
}