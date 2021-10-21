<?php
include_once "config/config.php";

spl_autoload_register(function ($class) {
    require_once("./incl/classes/" . $class . ".class.php");
});

session_start();

if (isset($_SESSION["id"])) {
    $logIN = true;
    $user = new User();

    $usernameShow = $user->getUsername($_SESSION["id"]);
    $adm = $user->checkAdmin($_SESSION["id"]);
} else {
    $logIN = false;
}

// Check if the user is ADMIN


// if logout clicked
if (isset($_GET["logout"])) {
    if (isset($_SESSION["id"])) {
        session_destroy();
        header("Location: mainpage.php?loggedout");
    }
}

?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>assests/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>assests/css/all.min.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>assests/css/style.css">


<!-- NAVBAR -->

<nav class="main-navbar">
    <div class="nav-center">
        <div class="nav-header">
            <p class="nav-logo">Zenon Trading</p>
            <button type="button" class="nav-toggle" id="nav-toggle" aria-label="nav toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="nav-links" id="nav-links">
            <a href="mainpage.php" class="nav-link">Home</a>
            <a href="#" class="nav-link">About</a>
            <a href="#services" class="nav-link">Services</a>
            <a href="#" class="nav-link">FAQ</a>
            <a href="#" class="nav-link">Support</a>

        </div>
        <div class="nav-icons">
            <a href="https://www.google.com" class="nav-icon" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.google.com" class="nav-icon" target="_blank"><i class="fab fa-twitter-square"></i></a>
            <a href="https://discord.gg/cxkHjhVf3V" class="nav-icon" target="_blank"><i class="fab fa-discord"></i></a>
            <a href="https://github.com/LegitaDev" class="nav-icon" target="_blank"><i class="fab fa-github-square"></i></a>
        </div>
        <?php
        if ($logIN) {
            echo "
            <div class=\"nav-links\">
                <a href=\"profile.php\" class=\"nav-link nav-log\">" . $usernameShow . "</a>
                <a href=\"mainpage.php?logout\" class=\"nav-link nav-log\">Logout</a>
            </div>
            ";
            if ($adm == 1) {
                echo "
            <div class=\"nav-links\">
                <a href=\"adminPage.php\" class=\"nav-link nav-log\">AdminPage</a>
                <a href=\"mainpage.php\" class=\"nav-link nav-log\">Users</a>
            </div>
            ";
            }
        } else {
            echo "
            <div class=\"nav-links\">
                <a href=\"login.php\" class=\"nav-link nav-log\">Login</a>
                <a href=\"register.php\" class=\"nav-link nav-log\">Register</a>
            </div>
            ";
        }
        ?>
    </div>
</nav>