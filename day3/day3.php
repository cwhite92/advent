<?php

$directions = str_split(file_get_contents('input.txt'));

$x = $y = 0;
$visited[$x.$y] = true;

foreach ($directions as $direction) {
    // Update Santa's position based on the direction given by the drunk elf
    switch ($direction) {
        case '^':
            $y++;
            break;
        case '>':
            $x++;
            break;
        case 'v':
            $y--;
            break;
        case '<':
            $x--;
            break;
    }

    if (!isset($visited[$x.$y])) {
        // Santa is visiting this house for the first time
        $visited[$x.$y] = true;
    }
}

echo sprintf("Number of houses with at least one present: %s\n", count($visited));