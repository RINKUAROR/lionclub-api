<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'db.php';  // ✅ goes up one folder


$sql = "SELECT game_name, result FROM results ORDER BY id DESC LIMIT 1";  // ✅ correct table name
$result = mysqli_query($conn, $sql);

$response = array();

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $response['game_name'] = $row['game_name'];
    $response['result'] = $row['result'];
    $response['status'] = 'success';
} else {
    $response['status'] = 'no_result';
}

echo json_encode($response);
?>
