<?php
$username = "root";
$password = "root";
$host = ENV === "DOCKER" ? "db" : "localhost";

try {
    $conn = new PDO("mysql:host=$host;dbname=itc", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage() . $e->getTraceAsString();
}

?>