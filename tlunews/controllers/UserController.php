<?php

require_once APP_ROOT . '/services/UserService.php';

class UserController
{
    public function index()
    {
        // goi du lieu tu user service
        $userService = new UserService();
        $users = $userService->getAllUsers();
        // render du lieu lay duoc ra homepage
        include APP_ROOT . '/views/admin/user/index.php';
    }
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');
        
            if (!empty($username) && !empty($password)) {
                $userService = new UserService();
                $user = $userService->login($username, $password);
                if ($user !== null) {
                    // Đăng nhập thành công
                    session_start();
                    $_SESSION['user'] = [
                        'id' => $user->getId(),
                        'username' => $user->getUsername(),
                        'role' => $user->getRole()
                    ];
                    header('Location: index.php?controller=admin&action=dashboard');
                    exit();
                } else {
                    $errorMessage = "Sai tên đăng nhập hoặc mật khẩu!";
                }
            } else {
                $errorMessage = "Vui lòng nhập đầy đủ thông tin!";
            }
        } else {
            $errorMessage = "";
        }
        
        require APP_ROOT . '/views/admin/login.php'; // Gọi file login.php để hiển thị form
    }
}