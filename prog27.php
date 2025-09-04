<?php
$numbers = [45, 12, 78, 23, 56, 9];

echo "Original Array:<br>";
print_r($numbers);

sort($numbers);
echo "<br><br>Ascending Order:<br>";
print_r($numbers);

rsort($numbers);
echo "<br><br>Descending Order:<br>";
print_r($numbers);
?>
