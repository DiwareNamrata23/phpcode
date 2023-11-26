<?php

function printFibonacci($n)
{
    $fibonacciSequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    foreach ($fibonacciSequence as $number) {
        echo $number . " ";
    }
}

// Change the value of $n to the desired number of Fibonacci numbers
$n = 10;
printFibonacci($n);

?>
