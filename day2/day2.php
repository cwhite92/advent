<?php

$presents = explode("\n", file_get_contents('input.txt'));
$total = 0;

foreach ($presents as $present) {
    list($l, $w, $h) = explode('x', $present);

    $total += (2 * $l * $w) + (2 * $w * $h) + (2 * $h * $l);
    $total += min($l * $w, $w * $h, $h * $l);
}

echo "Total square feet of wrapping paper needed: $total\n";

