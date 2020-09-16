<?php
// Getting and assigning user's input to a variable
$price = $_POST['price'];
$tip = $_POST['tipPercentage'];

// Calculting the tip amount
$tipAmount = $price * ($tip / 100);

// Calculating the total amount
$totalAmount = $tip + $tipAmount;

// Displaying results 
echo "The tip amount is: ". $tipAmount;
echo "<br><br>";
echo "Total amount is: ".$totalAmount;

?>