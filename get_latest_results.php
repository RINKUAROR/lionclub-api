<?php
include('db.php');
header('Content-Type: application/json');

$response = [];

$sql = "SELECT game_name, result FROM results ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $response = [
        "status" => true,
        "game_name" => $row['game_name'],
        "result" => $row['result']
    ];
} else {
    $response = [
        "status" => false,
        "message" => "No results found"
    ];
}

echo json_encode($response);
?>
