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

    <?php include "views/sign-up.php"; ?>

    <?php include "parts/footer.php"; ?>

    </body>
    </html>

<?php $conn = null; ?>