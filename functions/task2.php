<?php
// function that calculate the area of a circle

function calculateCircleArea($r) : int
{
    return $r * pi() * 2;
}

print_r(calculateCircleArea(2));