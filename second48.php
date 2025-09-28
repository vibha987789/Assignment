<?php
if (isset($_POST['username']) && !empty($_POST['username'])) {
    $name = $_POST['username'];
    setcookie("username", $name, time() + 3600, "/");
    header("Location: third48.php");
    exit();
} else {
    header("Location: first48.php");
    exit();
}
