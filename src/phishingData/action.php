<?php
session_start();

require_once('../../dbConnect.php');
require_once('admin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database();
    $user = new Admin();
    $conn = $db->getConnection();


    $username = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);

    /*
    $userID = 123;
    $token = "some_generated_token";

    $expiration = time() + (30 * 24 * 60 * 60);
    setcookie('remember_me', $userID . ':' . $token, $expiration, '/');
*/

    if ($user->loginUser($username, $password)) {
        $_SESSION['log']=true;
        echo "<script>window.location.href='dashboard.php'</script>";
    } else {
        echo "Login failed.";
    }
}

