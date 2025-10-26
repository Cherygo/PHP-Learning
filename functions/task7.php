<?php

// Task 7
// Create a function that takes two strings as arguments and return either true or false depending on
// whether the total number of characters in the first string is equal to the total number of characters in
// the second string.

// Examples
// areEqual('AB', 'CD') - true
// areEqual('ABC', 'DE') - false
// areEqual('hello', 'edabit') - false

function areEqual(string $word1, string $word2)
{
    // if(strlen($word1) === strlen($word2)) {
    //     return 1;
    // } else {
    //     return 0;
    // }
    
    return strlen($word1) === strlen($word2) ? "true" : "false";
}

print_r(areEqual("as", "de"));



print_r("\n");