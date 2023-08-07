<?php

require_once '../../dbConnect.php';

$db = new Database();
$conn = $db->getConnection();

if (isset($_POST['table'])) {
    $table = $_POST['table'];

    $sql = "SELECT * FROM `$table`";
    $res = mysqli_query($conn, $sql);

    if ($res === false) {
        $error = mysqli_error($conn);
        echo json_encode(array('error' => $error));
    } else {
        $data = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $data[] = $row;
        }

        header('Content-Type: application/json; charset=utf-8');

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
