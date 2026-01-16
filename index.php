<?php 

$hours = 30;
$rate = 15;
$weekly_pay = null;

if ($hours <= 40){
    $weekly_pay = $hours * $rate;
}

echo "you made \${$weekly_pay} this week";

 
?>