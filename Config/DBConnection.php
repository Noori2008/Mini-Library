<?php

class DBConnection
{
    private $server = "localhost";
    private $username = "root";
    private $pass = "";
    private $db = "minilibrary";
    protected $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli(
                $this->server,
                $this->username,
                $this->pass,
                $this->db
            );
        } catch (mysqli_sql_exception $ex) {
            die("Connection Failed: " . $ex->getMessage());
        }
    }

}