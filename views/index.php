<?php
/**
 * @var $conn PDO connection
 */
try {
    $resultObject = $conn->query("SELECT id, name FROM departments");
    $departments = $resultObject->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if (isset($_GET['dep_id'])){
    // link bosilgan
    include "views/users.php";
} else {
    include "views/departments.php";
}
?>