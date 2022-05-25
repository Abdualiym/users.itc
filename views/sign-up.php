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
    <h1 class="display-4">Sign up</h1>
</div>

<div class="container">
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">First name</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Your first name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Last name</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Your last name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="Your password">
        </div>
        <input type="submit" class="btn btn-primary" value="Sign up">
    </form>
</div>