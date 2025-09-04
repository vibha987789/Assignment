<?php
$fruits = [
    "Apple" => 120,
    "Banana" => 40,
    "Mango" => 100,
    "Orange" => 80,
    "Grapes" => 60
];
asort($fruits);
echo "Sorted by Prices (Values):<br>";
foreach ($fruits as $fruit => $price) {
    echo "$fruit : Rs.$price<br>";
}

echo "<br>";
ksort($fruits);
echo "Sorted by Fruits (Keys):<br>";
foreach ($fruits as $fruit => $price) {
    echo "$fruit : Rs.$price<br>";
}
?>
