<?php
$students = [
    "John" => 85,
    "Vibha" => 92,
    "divya" => 78,
    "Neha" => 88,
    "Karan" => 95
];

$students["salu"] = 90;

foreach ($students as $name => $marks) {
    echo "$name has scored $marks marks.<br>";
}
?>
