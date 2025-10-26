<?php
//convert hours into seconds

function hoursToSeconds($hours) : int
{
    return $hours * 60 * 60;
}

print_r(hoursToSeconds(2));