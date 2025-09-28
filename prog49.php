<?php
// Check if cookie is set
if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1; // increment count
    setcookie("visits", $visits, time() + (86400 * 30)); // cookie valid 30 days
    echo "You have visited $visits times.";
} else {
    // First visit
    $visits = 1;
    setcookie("visits", $visits, time() + (86400 * 30)); // cookie valid 30 days
    echo "This is your first visit!";
}
?>
