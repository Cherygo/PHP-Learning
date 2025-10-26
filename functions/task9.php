<?php

// Task 9
// Create a function that takes a string and returns a string in which each character is repeated once.

// Examples
// doubleCharacters("String") - "SSttrriinngg"
// doubleCharacters("Hello World!") - "HHeelllloo WWoorrlldd !! "
// doubleCharacters("1234! ") - "11223344 !!

function doubleCharacters(string $word) : string
{
    $repeated = "";
    for ($i = 0; $i < strlen($word); $i++) { 
        $repeated .= str_repeat($word[$i], 2);
    }   
    return $repeated;
}

print_r(doubleCharacters("ab"));

print_r("\n");