<?php
$arr = array(10,20,30,40,50,60);
echo "Original Array: <br>";
print_r($arr);
echo "<br><br>";

echo "Reverse (without array_reverse):<br>";
for($i = count($arr)-1; $i>=0; $i--){
 echo $arr[$i] . " ";
}
echo "<br><br>";
echo "Reverse (with array_reverse):<br>";
$rev = array_reverse($arr);
print_r($rev);
?>