<?php
$num = [10, 20, 30, 20, 40, 10, 50, 30];
echo "Original Array:<br>";
print_r($num);

$uniqueNumbers = array_unique($num);
echo "<br><br>Array after removing duplicates:<br>";
print_r($uniqueNumbers);
?>
