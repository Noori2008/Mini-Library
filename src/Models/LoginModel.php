<?php

require_once '../../Config/DBConnection.php';

class loginModel extends DBConnection
{
    public function verifyLogin($username, $password)
    {
        $query = "SELECT username,password FROM user WHERE username = ?";
        if ($stmt = $this->conn->prepare($query)) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($row = $result->fetch_assoc()) {
                
                if (password_verify($password, $row['password'])) {
                    $stmt->close();
                    
                    return ['username' => $row['username'], 'password' => $row['password']];
                }
            }
            $stmt->close();
        }
        return false;
    }
}
?>