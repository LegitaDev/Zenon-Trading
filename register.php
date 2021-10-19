<!DOCTYPE html>
<html>

<head>
    <?php require "./incl/header.php"; ?>
    <title>Register</title>
</head>

<body>
    <div class="main-form">
        <div class="second-form">
            <form action="register.php" method="POST">
                <label>Username</label><input type="text" name="username">
                <label>Email</label><input type="text" name="email">
                <label>Password</label><input type="password" name="password">
                <label>Password Check</label><input type="password" name="passwordCheck">
                <button type="submit" class="btn-black">Register</button>
            </form>
        </div>
    </div>

</body>

<?php require "./incl/footer.php"; ?>

</html>