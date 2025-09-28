<?php
if (isset($_COOKIE['username'])) {
    $name = $_COOKIE['username'];
    $message = "Welcome back, $name!";
} else {
    header("Location: first48.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>
