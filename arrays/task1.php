<?php

//create a fucntion that returns the last element of an array

function lastElement(array $arr) : string 
{
    $element = $arr[count($arr) - 1];
    return $element;
}

print_r(lastElement([1,2,3,4,5,6,7,8,10]));