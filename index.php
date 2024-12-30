<?php
 
require_once 'config/Database.php';
require_once 'models/User.php';
require_once 'controllers/UserController.php';

$controller = new UserController();
 
    $action = 'add';
 
switch($action) {
    case 'add':
        $controller->add();
        break;
        
}