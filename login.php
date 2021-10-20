<!DOCTYPE html>
<html>

<head>
    <?php require "./incl/header.php"; ?>
    <title>Login</title>
</head>

<body>

    <?php

    if (isset($_POST["loginSubmit"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = new User();

        if (!isset($username) || !isset($password)) {
            $user->errors[] = "Please try again later or contact an Admin.";
        }
        if (empty($username) || empty($password)) {
            $user->errors[] = "Please fill up the inputs.";
        }

        if (empty($user->errors)) {
            $login = $user->login($username, $password);

            if ($login == false) {
                $user->displayError();
            } else {
                header("Location: mainpage.php?id=" . $_SESSION["id"]);
            }
        } else {
            $user->displayError();
        }
    }

    ?>


    <div class="main-form">
        <div class="second-form">
            <form action="login.php" method="POST">
                <label>Username</label><input type="text" name="username">
                <label>Password</label><input type="password" name="password">
                <button type="submit" class="btn-black" name="loginSubmit">Log in</button>
            </form>
        </div>
    </div>
</body>

<?php require "./incl/footer.php"; ?>

</html>