<?php
// A string of numbers in a for-loop that counts from 1 to 100.
for ($integer = 1; $integer <= 100; $integer++) {
    // Empty string to store the result.
    $result = "";

    // Check that the number is divisible by 3 and that there is no remainder.
    if ($integer % 3 == 0) {
        $result .= "X";
    }

    // Check that the number is divisible by 5 and that there is no remainder.
    if ($integer % 5 == 0) {
        $result .= "Y";
    }

    // Output a string with the required conditions.
    if ($result !== "") {
        echo $result . " ";
    } else {
        echo $integer . " ";
    }
}
?>