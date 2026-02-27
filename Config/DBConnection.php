<?php

class DBConnection
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "minilibrary";
    protected $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $ex) {
            die("Connection is Failed !" . $ex->getMessage());
        }
    }
}