<?php
/**
 * @var $conn PDO connection
 */

if (isset($_POST['email'])) {

    $password = md5($_POST['password']);
    $email = $_POST['email'];

    $resultObject = $conn->query("SELECT * FROM users where email='$email'");
    $user = $resultObject->fetchAll();

    if (!count($user)){
        $error = "Unable find user by email";
    } else {
        if ($user[0]['password'] != $password){
            $error = "Incorrect password";
        } else {
            echo "<h1>Success</h1>";
        }
    }
//    echo "<pre>";
//    print_r($user['password']);
//    echo "</pre>";


}


try {
    $resultObject = $conn->query("SELECT id, name FROM departments");
    $departments = $resultObject->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Login</h1>
</div>

<div class="container">

    <?php if (isset($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?= $error; ?></strong>
        </div>
    <?php } ?>

    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="email" required type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Password</label>
            <input name="password" required type="password" class="form-control" id="exampleFormControlInput2" placeholder="Your password">
        </div>
        <input type="submit" class="btn btn-primary" value="Login">
    </form>
</div>