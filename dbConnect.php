<?php

require_once('config.php');

class Database
{
    private $conn;

    public function getConnection()
    {
        if (!$this->conn) {
            $this->conn = new \mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        return $this->conn;
    }
}