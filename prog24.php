<?php
$num=array(10,20,30,40,50);
$sum=0;
for($i=0; $i<count($num); $i++){
    $sum+=$num[$i];
}
echo "Array Element <br>";
print_r($num);
echo "<br>";
echo "Total sum = ". $sum;
?>