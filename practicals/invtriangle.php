<?php

function printInvertedTriangle($height) {
    for ($i = $height; $i >= 1; $i--) {
        // Print leading spaces
        for ($j = $height - $i; $j > 0; $j--) {
            echo " ";
        }

        // Print asterisks
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        // Move to the next line
        echo PHP_EOL;
    }
}

// Set the height of the inverted triangle
$height = 5;

// Call the function to print the inverted triangle
printInvertedTriangle($height);
?>

