<?php

function swapNumbers($a, $b) {
    // Print original numbers
    echo "Original numbers: a = $a, b = $b\n";

    // Swap the numbers
    $temp = $a;
    $a = $b;
    $b = $temp;

    // Print swapped numbers
    echo "Swapped numbers: a = $a, b = $b\n";
}

// Example usage
$number1 = 5;
$number2 = 10;

swapNumbers($number1, $number2);

?>
