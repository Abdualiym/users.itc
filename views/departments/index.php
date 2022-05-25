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
?>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Deparments</h1>
</div>

<div class="container">

    <nav class="nav flex-column">
        <?php if (ADMIN): ?>
            <a class="btn btn-success btn-sm" href="add_dep.php">Add</a>
        <?php endif; ?>

        <?php
        foreach ($departments as $department) {
            $usersObject = $conn->query("SELECT count(*) FROM users WHERE department_id = " . $department['id']);
            $usersCount = $usersObject->fetchAll();
            ?>
            <p>
                <a class="btn btn-link" href="index.php?dep_id=<?= $department['id'] ?>">
                    <?= $department['name'] ?> (<?= $usersCount[0][0] ?>)
                </a>

                <?php if (ADMIN): ?>
                    <a class="btn btn-warning btn-sm" href="edit_dep.php?dep_id=<?= $department['id'] ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="delete_dep.php?dep_id=<?= $department['id'] ?>">Delete</a>
                <?php endif; ?>

            </p>

        <?php } ?>
    </nav>

</div>
