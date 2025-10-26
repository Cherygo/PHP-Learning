<?php

// Task 4

// Create a function isAllowedToDrive that determinates whether a person is allowed to drive a car. The
// function should accept the following arguments:

// 0. age (number)
// 1. hasDrivingLicense (boolean)
// 2. hasConsumedAlcohol (boolean)

// Return true when the person is at least 18 years old, has a driving license and has not consumed
// alcohol.

function isAllowedToDrive(int $age, bool $hasDrivingLicense, bool $hasConsumedAlcohol)
{
    if(($hasDrivingLicense || $hasConsumedAlcohol) || $age < 18) {
        return 0;
    } 
    else {
        return 1;
    }
}

print_r(isAllowedToDrive(18, false, false));