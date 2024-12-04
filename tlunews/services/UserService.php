<?php
require_once APP_ROOT . '/models/User.php';
class UserService
{
    public function getAllUsers()
    {
        try {
            //b1: ket noi db
            $conn = new PDO('mysql:host=localhost;dbname=tlunews', 'root', '');

            //b2: truy van du lieu
            $sql = "Select * from users";
            $stmt = $conn->query($sql);
            //b3: xu ly ket qua
            $users = [];
            while ($row = $stmt->fetch()) {
                $user = new User($row['id'], $row['username'], $row['password'], $row['role']);
                $users[] = $user;
            }
            return $users;
        } catch (PDOException $e) {
            return $user = [];
        }
    }
    public function login($username, $password)
    {
        try {
            //b1: ket noi db
            $conn = new PDO('mysql:host=localhost;dbname=tlunews', 'root', '');

            //b2: truy van du lieu
            $sql = "Select * from users where username='".$username."'";
            $stmt = $conn->query($sql);

            if ($row = $stmt->fetch()) {
                if ($password == $row['password']) {
                    return new User($row['id'], $row['username'], $row['password'], $row['role']);
                } else {
                    return null;
                }
            }
            return null;
        } catch (PDOException $e) {
            //echo "<script>console.log('". $e->getMessage() ."');</script>";
            return null;
        }
    }
}