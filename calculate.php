<?php

$price = $_POST['price'];
$tip = $_POST['tipPercentage'];

$tipAmount = $price * ($tip / 100);

echo "The tip amount is ". $tipAmount;

?>