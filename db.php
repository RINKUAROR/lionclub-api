<?php
$host = "sql303.infinityfree.com"; // Replace with your InfinityFree DB host
$user = "if0_39206959";    // Your DB username
$pass = "N7ZC064679W7Np"; // Your DB password
$db = "if0_39206959_sattaking"; // Your DB name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
