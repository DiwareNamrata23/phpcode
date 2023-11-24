<?php

// Function to generate inverted triangle pattern
function invertedTriangle($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        // Print spaces
        for ($j = $rows - $i; $j > 0; $j--) {
            echo " ";
        }

        // Print asterisks
        for ($k = 2 * $i - 1; $k >= 1; $k--) {
            echo "*";
        }

        echo "\n";
    }
}

// Example usage
$rows = 5;
invertedTriangle($rows);

?>
