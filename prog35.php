<?php
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Germany" => "Berlin"
];

$capital = "uk"; 

if (array_search($capital, $countries)) {
    echo "Found";
} else {
    echo "Not Found";
}
?>
