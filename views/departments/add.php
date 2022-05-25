<?php
/**
 * @var $conn PDO connection
 */
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if ($conn->exec("INSERT INTO departments (name) VALUES ('$name')")) {
        header("Location: index.php");
    } else {
        $flash = "Error occured!";
    }
}
?>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Add department</h1>
</div>

<div class="container">
    <?php if (isset($flash)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?= $flash ?></strong>
        </div>
    <?php } ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="formControlInput1" class="form-label">Name</label>
            <input name="name" required type="text" class="form-control" id="formControlInput1" placeholder="Name">
        </div>
        <input type="submit" class="btn btn-success" value="Add">
    </form>
</div>