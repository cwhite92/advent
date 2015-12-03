<?php

$presents = explode("\n", file_get_contents('input.txt'));
$total = 0;

foreach ($presents as $present) {
    // 1x2x3 - length, width, height
    list($length, $width, $height) = explode('x', $present);

    $first = $length * $width;
    $second = $width * $height;
    $third = $height * $length;

    $smallest = min($first, $second, $third);

    $total += (2*$first) + (2*$second) + (2*$third);
    $total += $smallest;
}

echo "Total square feet of wrapping paper needed: $total\n";