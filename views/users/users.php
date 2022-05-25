<?php
/**
 * @var $conn PDO connection
 */
try {
    $resultObject = $conn->query("SELECT * FROM users WHERE department_id=" . $_GET['dep_id']);
    $users = $resultObject->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Users</h1>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <script>
            $(function () {
                $("#accordion").accordion();
            });
        </script>
        <?php
        if (count($users)) {
            echo '<div id="accordion">';
            foreach ($users as $user) {
                echo '<h3>' . $user['first_name'] . " " . $user['last_name'] . "</h3>";
                echo "<div>";
                echo "<p>ID: <b>" . $user['id'] . "</b></p> ";
                echo "<p>Email: <b>" . $user['email'] . "</b></p>";
                echo "<p>Role: <b>" . $user['role'] . "</b></p>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<h2>Users not found.</h2>";
        }
        ?>

    </div>
</div>
