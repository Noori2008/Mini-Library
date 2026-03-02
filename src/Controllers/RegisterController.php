<?php

require_once '../Models/RegisterModel.php';

class RegisterController
{
    private $model;

    public function __construct()
    {
        $this->model = new registerModel();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return ['success' => false, 'message' => 'Bad request'];
        }

        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');
        $name     = trim($_POST['name'] ?? '');
        $nic      = trim($_POST['nic'] ?? '');
        $email    = trim($_POST['email'] ?? '');

        if (
            $username === '' || $password === '' || $name === '' ||
            $nic === '' || $email === ''
        ) {
            return ['success' => false, 'message' => 'All fields required'];
        }

        if ($this->model->registerUser($username, $password, $name, $nic, $email)) {
            return ['success' => true, 'message' => 'Registration successful'];
        }

        return ['success' => false, 'message' => 'Unable to register'];
    }
}

if (isset($_POST['register'])) {
    $ctrl = new RegisterController();
    $result = $ctrl->register();

    if ($result['success']) {
        // Redirect to dashboard on success
        header("Location: ../../index.php");
        exit();
    } else {
        // Display error on failure so the page isn't white
        echo "<h1>Login Error</h1>";
        echo "<p>" . $result['message'] . "</p>";
        echo "<a href='../../index.php'>Go Back</a>";
    }
}
