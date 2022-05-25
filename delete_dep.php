<?php
/**
 * @var $conn PDO connection
 */
include "parts/setup.php";
include "parts/db_connect.php";

$depID = $_GET['dep_id'];

$conn->exec("DELETE FROM departments WHERE id='$depID'");

header("Location: index.php");
?>