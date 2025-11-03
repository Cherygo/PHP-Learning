<?php

// create a function that takes in an array and returns its first element

function firstElement(array $arr) : string {
    $element = $arr[0];
    return $element;
}

print_r(firstElement([1,23,4,5,2,52,6,5,234,324,234,324,13,0]));