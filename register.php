<!DOCTYPE html>
<html>

<head>
    <?php require "./incl/header.php"; ?>
    <title>Register</title>
</head>

<body>
    <?php
    if (isset($_POST["registerSubmit"])) {

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordCheck = $_POST["passwordCheck"];

        $user = new User();

        if (!isset($username) || !isset($email) || !isset($password) || !isset($passwordCheck)) {
            $user->errors[] = "Please try again later or contact an Admin.";
        }
        if (empty($username) || empty($email) || empty($password) || empty($passwordCheck)) {
            $user->errors[] = "Please fill up the inputs.";
        } elseif (strlen($password) < 2) { //password allowed length
            $user->errors[] = "Password should be more than 8 characters";
        } elseif ($password !== $passwordCheck) {
            $user->errors[] = "Passwords don't match, try again";
        }

        // Check above errors

        if (empty($user->errors)) {
            // Creating user
            $register = $user->register($username, $email, $password);

            if ($register == false) {
                echo $user->displayError();
            } else {
                echo $user->displaySuccess();
            }
        } else {
            echo $user->displayError();
        }
    }
    ?>



    <div class="main-form">
        <div class="second-form">
            <form action="register.php" method="POST">
                <label>Username</label><input type="text" name="username">
                <label>Email</label><input type="email" name="email">
                <label>Password</label><input type="password" name="password">
                <label>Password Check</label><input type="password" name="passwordCheck">
                <button type="submit" class="btn-black" name="registerSubmit">Register</button>
            </form>
        </div>
    </div>

</body>

<?php require "./incl/footer.php"; ?>

</html>