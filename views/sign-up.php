<?php
/**
 * @var $conn PDO connection
 */

if (isset($_POST['dep_id'])) {

    $firstName = $_POST['f_name'];
    $lastName = $_POST['l_name'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $depId = $_POST['dep_id'];

    $sql = "INSERT INTO users (first_name, last_name, email, password, department_id, role)
  VALUES ('$firstName', '$lastName', '$email', '$password', '$depId', 'user')";
    if ($conn->exec($sql)) {
        $flash = "New record created successfully";
    }
}


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
    <?php if (isset($flash)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?= $flash ?></strong>
        </div>
    <?php } ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="formControlInput1" class="form-label">Email address</label>
            <input name="email" required type="email" class="form-control" id="formControlInput1" placeholder="Your email">
        </div>
        <div class="mb-3">
            <label for="formControlInput2" class="form-label">First name</label>
            <input name="f_name" required type="text" class="form-control" id="formControlInput2" placeholder="Your first name">
        </div>
        <div class="mb-3">
            <label for="formControlInput3" class="form-label">Last name</label>
            <input name="l_name" required type="text" class="form-control" id="formControlInput3" placeholder="Your last name">
        </div>
        <div class="mb-3">
            <label for="formControlInput4" class="form-label">Password</label>
            <input name="password" required type="password" class="form-control" id="formControlInput4" placeholder="Your password">
        </div>
        <div class="mb-3">
            <label for="formControlInput5" class="form-label">Department</label>
            <select name="dep_id" required class="form-control" id="formControlInput5">
                <?php
                foreach ($departments as $department) {
                    echo '<option value="' . $department['id'] . '">' . $department['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Sign up">
    </form>
</div>