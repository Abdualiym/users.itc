<?php
$username = "root";
if (ENV === "DOCKER") {
    $password = "";
    $host = "db";
} else {
    $password = "root";
    $host = "localhost";
}

try {
    $conn = new PDO("mysql:host=$host;dbname=itc", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage() . $e->getTraceAsString();
}

?>