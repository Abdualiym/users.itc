<?php
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=itc;charset=utf8mb4;port=3306", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>