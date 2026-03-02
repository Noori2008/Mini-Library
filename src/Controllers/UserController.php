<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// AUTH GUARD: All user management requires a logged-in session
if (!isset($_SESSION['username'])) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit();
}

require_once '../../Config/DBConnection.php';
require_once '../Models/UserModel.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function getAllUsers()
    {
        $users = $this->userModel->getAllUsers();
        return ['success' => true, 'data' => $users];
    }

    public function getUserById($userId)
    {
        $user = $this->userModel->getUserById($userId);
        if ($user === false) {
            return ['success' => false, 'message' => 'User not found'];
        }
        return ['success' => true, 'data' => $user];
    }

    public function getAllRoles()
    {
        $roles = $this->userModel->getAllRoles();
        return ['success' => true, 'data' => $roles];
    }

    public function createUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = isset($_POST['username']) ? trim($_POST['username']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';
            $name     = isset($_POST['name'])     ? trim($_POST['name'])     : '';
            $nic      = isset($_POST['nic'])       ? trim($_POST['nic'])      : '';
            $email    = isset($_POST['email'])     ? trim($_POST['email'])    : '';
            $roleId   = isset($_POST['roleId'])    ? intval($_POST['roleId']) : 0;

            if (empty($username) || empty($password) || empty($name) || empty($nic) || empty($email) || empty($roleId)) {
                return ['success' => false, 'message' => 'All fields are required'];
            }

            // Hash password before passing to model
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $result = $this->userModel->createUser($username, $hashedPassword, $name, $nic, $email, $roleId);

            if (!$result) {
                return ['success' => false, 'message' => 'Failed to create user'];
            }
            return ['success' => true, 'message' => 'User created successfully'];
        }
        return ['success' => false, 'message' => 'Invalid request method'];
    }

    public function addRole()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nic    = isset($_POST['nic'])    ? trim($_POST['nic'])      : '';
            $email  = isset($_POST['email'])  ? trim($_POST['email'])    : '';
            $roleId = isset($_POST['roleId']) ? intval($_POST['roleId']) : 0;

            if (empty($nic) || empty($email) || empty($roleId)) {
                return ['success' => false, 'message' => 'NIC, Email, and Role are required'];
            }

            $user = $this->userModel->getUserByNicEmail($nic, $email);

            if ($user === false) {
                return ['success' => false, 'message' => 'User not found with provided NIC and Email'];
            }

            $result = $this->userModel->addRoleToUser($user['id'], $roleId);

            if (!$result) {
                return ['success' => false, 'message' => 'Failed to assign role'];
            }
            return ['success' => true, 'message' => 'Role assigned to ' . htmlspecialchars($user['name']) . ' successfully'];
        }
        return ['success' => false, 'message' => 'Invalid request method'];
    }

    public function updateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId   = isset($_POST['userId'])   ? intval($_POST['userId'])   : 0;
            $name     = isset($_POST['name'])     ? trim($_POST['name'])       : '';
            $username = isset($_POST['username']) ? trim($_POST['username'])   : '';
            $email    = isset($_POST['email'])    ? trim($_POST['email'])      : '';
            $password = isset($_POST['password']) ? trim($_POST['password'])   : '';
            $roleId   = isset($_POST['roleId'])   ? intval($_POST['roleId'])   : 0;

            if (empty($userId) || empty($name) || empty($username) || empty($email) || empty($roleId)) {
                return ['success' => false, 'message' => 'All fields are required'];
            }

            $result = $this->userModel->updateUser($userId, $name, $username, $email, $password, $roleId);

            if ($result === false) {
                return ['success' => false, 'message' => 'Failed to update user'];
            }
            return ['success' => true, 'message' => 'User updated successfully'];
        }
        return ['success' => false, 'message' => 'Invalid request method'];
    }

    public function deleteUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = isset($_POST['userId']) ? intval($_POST['userId']) : 0;

            if (empty($userId)) {
                return ['success' => false, 'message' => 'User ID required'];
            }

            if ($userId === 1) {
                return ['success' => false, 'message' => 'Cannot delete system admin'];
            }

            $result = $this->userModel->deleteUser($userId);

            if (!$result) {
                return ['success' => false, 'message' => 'Failed to delete user'];
            }
            return ['success' => true, 'message' => 'User deleted successfully'];
        }
        return ['success' => false, 'message' => 'Invalid request method'];
    }

    public function searchUsers()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $searchTerm = isset($_POST['search']) ? trim($_POST['search']) : '';

            if (empty($searchTerm)) {
                $users = $this->userModel->getAllUsers();
            } else {
                $users = $this->userModel->searchUsers($searchTerm);
            }

            return ['success' => true, 'data' => $users];
        }
        return ['success' => false, 'message' => 'Invalid request method'];
    }
}

// Route POST actions
if (isset($_POST['action'])) {
    $userController = new UserController();
    $action = $_POST['action'];

    switch ($action) {
        case 'getAllUsers':
            $result = $userController->getAllUsers();
            break;
        case 'getUserById':
            $userId = isset($_POST['userId']) ? intval($_POST['userId']) : null;
            $result = $userController->getUserById($userId);
            break;
        case 'getAllRoles':
            $result = $userController->getAllRoles();
            break;
        case 'createUser':
            $result = $userController->createUser();
            break;
        case 'addRole':
            $result = $userController->addRole();
            break;
        case 'updateUser':
            $result = $userController->updateUser();
            break;
        case 'deleteUser':
            $result = $userController->deleteUser();
            break;
        case 'searchUsers':
            $result = $userController->searchUsers();
            break;
        default:
            $result = ['success' => false, 'message' => 'Invalid action'];
            break;
    }

    header('Content-Type: application/json');
    echo json_encode($result);
    exit();
}
?>