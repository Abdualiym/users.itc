<?php
define("ENV", "DOCKER");
//define("ENV", "OSPANEL");

?>
<?php include "db_connect.php"; ?>


    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Users · Bootstrap v4.6</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/jquery-ui.css">
        <!--    <link rel="stylesheet" href="/resources/demos/style.css">-->
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/jquery-ui.js"></script>

        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php include "header.php"; ?>

    <?php include "content.php"; ?>

    <?php include "footer.php"; ?>

    </body>
    </html>

<?php $conn = null; ?>