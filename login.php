<!DOCTYPE html>
<html>

<head>
    <?php require "./incl/header.php"; ?>
    <title>Login</title>
</head>

<body>
<div class="main-form">
    <div class="second-form">
        <form action="login.php" method="POST">
            <label>Username</label><input type="text" name="username">
            <label>Password</label><input type="password" name="password">
            <button type="submit" class="btn-black">Log in</button>
        </form>
    </div>
</div>
</body>

<?php require "./incl/footer.php"; ?>

</html>