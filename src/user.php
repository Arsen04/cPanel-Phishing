<?php

require_once('../dbConnect.php');

class User extends Database{

    public function __construct() {

    }

    /*
     public function registerUser($login, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $conn = $this->getConnection();

        $sql = "INSERT INTO account (login, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $login, $hashedPassword);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }*/
    public function registerUser($login, $password) {
        $conn = $this->getConnection();

        $sql = "INSERT INTO account (login, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $login, $password);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
/*$s = new User();
if ($s->registerUser('asdasd', 'asdasd')) {
    echo "Registration successful.";
} else {
    echo "Registration failed.";
}*/
