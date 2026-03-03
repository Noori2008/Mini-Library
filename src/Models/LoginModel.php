<?php

require_once '../../Config/DBConnection.php';

class loginModel extends DBConnection
{
    public function verifyLogin($username, $password)
    {
        $query = "SELECT id, username, password, roleid FROM user WHERE username = ? AND password = ?";
        if ($stmt = $this->conn->prepare($query)) {
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
                $stmt->close();
                return [
                    'id'       => $row['id'],
                    'username' => $row['username'],
                    'roleid'   => $row['roleid']
                ];
            }
            $stmt->close();
        }
        return false;
    }
}
?>