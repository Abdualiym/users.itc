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

        <div id="accordion">
            <?php
            if (count($users)) {
                foreach ($users as $user) {
                    echo '<h3>' . $user['first_name'] . " " . $user['last_name'] . "</h3>";
                    echo "<div>";
                    echo "<p>" . $user['id'] . "</p> ";
                    echo "<p>" . $user['email'] . "</p>";
                    echo "<p>" . $user['role'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<h2>Users not found.</h2>";
            }
            ?>
        </div>

    </div>
</div>
