<?php

// Task 10
// Create a function that takes a string and returns the number (count) of vowels contained within it.

// Examples:
// countVowels("Celebration") -5
// countVowels("Palm") -1
// countVowels("Prediction") - 4
// Note: a, e, i, o, u are considered vowels (not y ).
function countVowels(string $word) : int
{
    $arrWord = str_split($word);
    $vowelArr = [
        "a",
        "e",
        "i",
        "o",
        "u",
    ];
    $vowelCount = 0;
    foreach ($arrWord as $letter) {
        if(in_array($letter, $vowelArr)) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}

print_r(countVowels("cleebration"));