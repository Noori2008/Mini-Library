<?php


require_once '../../Config/DBConnection.php';
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
                $_SESSION['username'] = $user['username'];
                $_SESSION['password'] = $user['password'];
                return ['success' => true, 'message' => 'Login successful'];
            }

            return ['success' => false, 'message' => 'Invalid credentials'];
        }
    }
}
if (isset($_POST['admin-login'])) {
    $admincontroller = new admincontroller();
    $admincontroller->login();
}
?>