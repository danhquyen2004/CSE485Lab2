<?php
require_once('../tlunews/config/config.php');




$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

if ($controller == 'home') {
    
}
else if( $controller == 'user')
{
    if($action == 'manager')
    {
        require_once APP_ROOT . '/controllers/UserController.php';
        $userController = new UserController();
        $userController->index();
    }
    else if($action == 'login')
    {
        require_once APP_ROOT . '/controllers/UserController.php';
        $userController = new UserController();
        $userController->login();
    }
    else{
        echo "NOT FOUND";
    }
}
else if($controller == "admin")
{
    if($action == 'dashboard')
    {
        require_once APP_ROOT . '/controllers/AdminController.php';
        $adminController = new AdminController();
        $adminController->index();
    }
}
else {
    echo "NOT FOUND";
}
