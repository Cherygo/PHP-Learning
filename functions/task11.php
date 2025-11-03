<?php

// Task 11
// You are given the length of a video in minutes. The format is mm:ss (e.g .: "02:54"). Create a function that
// takes the video length and return it in seconds.

// Examples:
// getVideoLength("01:00") - 60
// getVideoLength("13:56") -836

function getVideoLength(string $length)
{
    $minutes = substr($length, 0, 1) === 0 ? substr($length, 1, 1) : substr($length, 0, 2);
    $seconds = substr($length, 3, 1) === 0 ? substr($length, 4, 1) : substr($length, 3, 2);

    return $minutes * 60 + $seconds;
}

print_r(getVideoLength("13:56"));