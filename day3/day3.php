<?php

$directions = str_split(file_get_contents('input.txt'));

$x = $y = 0;
$visited[$x.$y] = 1;

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

    if (isset($visited[$x.$y])) {
        // We've visited this house before
        $visited[$x.$y]++;
    } else {
        $visited[$x.$y] = 1;
    }
}

$houses = count($visited);

echo "Number of houses with at least one present: {$houses}\n";