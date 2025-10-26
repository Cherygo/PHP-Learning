<?php
// Task 5
// Create a function that takes a range of numbers -> min, max, and returns only the even ones in this
// range.

// Example:
// printEventNumbersBetweenNumbers(1, 9) -- > [2, 4, 6, 8]

function onlyEven(int $min, int $max)
{
    $evenArr = [];
    for ($i = $min; $i <= $max; $i++) {
        if($i % 2 == 0) {
            array_push($evenArr, $i);
        }
    }
    return $evenArr;
}

print_r(onlyEven(1,9));