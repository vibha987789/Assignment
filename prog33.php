<?php
$students = [
    "Aman" => 85,
    "Vibha" => 92,
    "Rohit" => 78
];
$key = "Vibha";

if (array_key_exists($key, $students)) {
    echo "Key '$key' exists in the array with value: " . $students[$key];
} else {
    echo "Key '$key' does not exist in the array.";
}
?>
