<?php

// Function to calculate factorial
function factorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Example usage
$number = 5;
$result = factorial($number);

echo "The factorial of $number is: $result";

?>
