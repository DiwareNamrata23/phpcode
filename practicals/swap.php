<?php

// Function to swap two numbers
function swapNumbers(&$num1, &$num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

// Example usage
$number1 = 5;
$number2 = 10;

echo "Before swapping: \n";
echo "Number 1: $number1 \n";
echo "Number 2: $number2 \n";

// Call the swap function
swapNumbers($number1, $number2);

echo "After swapping: \n";
echo "Number 1: $number1 \n";
echo "Number 2: $number2 \n";

?>
