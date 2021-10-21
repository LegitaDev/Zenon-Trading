<!DOCTYPE html>
<html>

<head>
    <?php require "./incl/header.php"; ?>
    <title>Profile</title>
</head>

<body>

    <?php

    if (isset($_SESSION["id"])) {

        echo "<div class=\"main-div\">
        Welcome " . $usernameShow . "
        </div>";
    }

    ?>



</body>

<?php require "./incl/footer.php"; ?>

</html>