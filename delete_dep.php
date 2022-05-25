<?php
/**
 * @var $conn PDO connection
 */
include "setup.php";
include "db_connect.php";

$depID = $_GET['dep_id'];

$conn->exec("DELETE FROM departments WHERE id='$depID'");

header("Location: index.php");
?>