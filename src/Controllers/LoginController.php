<?php

session_start();

require_once '../Models/LoginModel.php';

class LoginController
{
    private $loginModel;

    public function __construct()
    {
        $this->loginModel = new loginModel();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = isset($_POST['username']) ? trim($_POST['username']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';

            if (empty($username) || empty($password)) {
                return ['success' => false, 'message' => 'Username and password required'];
            }

            $user = $this->loginModel->verifyLogin($username, $password);

            if ($user !== false) {
                $_SESSION['id']       = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['roleid']   = $user['roleid'];
                return ['success' => true, 'message' => 'Login successful'];
            } else {
                return ['success' => false, 'message' => 'Invalid username or password'];
            }
        }

        return ['success' => false, 'message' => 'Invalid request method'];
    }
}

if (isset($_POST['admin-login'])) {
    $LoginController = new LoginController();
    $result = $LoginController->login();
    if ($result['success']) {
        header("Location: ../../index.php");
        exit();
    } else {
        echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Login Error</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body class='bg-light d-flex align-items-center vh-100'>
    <div class='container text-center'>
        <div class='alert alert-danger'>" . htmlspecialchars($result['message']) . "</div>
        <a href='../Views/login.php' class='btn btn-primary'>Go Back</a>
    </div>
</body>
</html>";
    }
}