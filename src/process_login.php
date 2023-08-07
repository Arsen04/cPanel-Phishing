<?php

require_once('../dbConnect.php');
require_once('user.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $db = new Database();
    $conn = $db->getConnection();

    $username = $conn -> real_escape_string($_POST["username"]);
    $password = $conn -> real_escape_string($_POST["password"]);

    $user = new User();

    if ($user->registerUser($username, $password)) {
        header("Location: ../index.php");
    } else {
        echo "Registration failed.";
    }
}