<?php include "parts/setup.php"; ?>
<?php include "parts/db_connect.php"; ?>

    <!doctype html>
    <html lang="en">
    <body>

    <?php include "parts/head.php"; ?>

    <?php include "parts/navbar.php"; ?>

    <?php
    if (isset($_GET['dep_id'])) {
        include "views/users/users.php";
    } else {
        include "views/departments/index.php";
    }
    ?>

    <?php include "parts/footer.php"; ?>

    </body>
    </html>

<?php $conn = null; ?>