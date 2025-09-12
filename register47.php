<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($username) || empty($email) || empty($password)) {
    echo "<h3>Error: All fields are required!</h3>";
} else {
    echo "<h2>Registration Successful!</h2>";
    echo "Username: $username <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>"; 
}
?>
