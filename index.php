<?php
define("ENV", "DOCKER");
//define("ENV", "OSPANEL");

?>
<?php include "db_connect.php"; ?>

    <!doctype html>
    <html lang="en">
    <body>

    <?php include "parts/head.php"; ?>

    <?php include "parts/navbar.php"; ?>

    <?php
    if (isset($_GET['dep_id'])) {
        include "views/users.php";
    } else {
        include "views/departments.php";
    }
    ?>

    <?php include "parts/footer.php"; ?>

    </body>
    </html>

<?php $conn = null; ?>