<?php

// Task 8
// Create a function that takes a word and returns the new word without including the first character.

// Examples
// stripFirstLetter("apple") - "pple"
// stripFirstLetter("cherry") - "herry"
// stripFirstLetter("plum") - "lum"

function noFirstCharacter(string $word) : string
{
    return substr($word, 1, strlen($word) - 1);
}

print_r(noFirstCharacter("apple"));

print_r("\n");