<?php

require_once('../../dbConnect.php');

class Admin extends Database{

    public function __construct() {

    }
     public function registerAdmin($login, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $conn = $this->getConnection();

        $sql = "INSERT INTO admin (login, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $login, $hashedPassword);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function loginUser($login, $password) {
        $conn = $this->getConnection();
        
        $sql = "SELECT password FROM admin WHERE login = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {

            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            if (password_verify($password, $hashedPassword)) {
                return true;
            }
        }
        else{
            return false; 
        }
    }
}
/*$s = new Admin();
if ($s->registerAdmin('user@example.com', 'klirS$&skuTe87sTeKja')) {
    echo "Registration successful.";
} else {
    echo "Registration failed.";
}*/
