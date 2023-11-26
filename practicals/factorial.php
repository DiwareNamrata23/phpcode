<?php

function calculateFactorial($number) {
    // Base case: factorial of 0 is 1
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        // Recursive case: factorial(n) = n * factorial(n-1)
        return $number * calculateFactorial($number - 1);
    }
}

function printFactorial($number) {
    // Check if the input is a non-negative integer
    if (!is_numeric($number) || $number < 0 || floor($number) != $number) {
        echo "Invalid input. Please enter a non-negative integer.";
    } else {
        // Calculate and print the factorial
        $factorial = calculateFactorial($number);
        echo "Factorial of $number is: $factorial";
    }
}

// Example: Calculate and print factorial of 5
printFactorial(5);

?>
