<?php

//create a fucntion that concatenates two integer arrays

function concatArr(array $arr1, array $arr2) : array
{
    $concat = array_merge($arr1, $arr2);
    return $concat;
}

print_r(concatArr([1,2,3,4,5], [5,4,3,2,1]));