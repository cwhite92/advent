<?php

$presents = explode("\n", file_get_contents('input.txt'));
$totalPaper = 0;
$totalRibbon = 0;

foreach ($presents as $present) {
    $dimensions = explode('x', $present);
    sort($dimensions, SORT_NUMERIC);

    $totalPaper += (2 * $dimensions[0] * $dimensions[1]) + (2 * $dimensions[1] * $dimensions[2]) + (2 * $dimensions[2] * $dimensions[0]);
    $totalPaper += min($dimensions[0] * $dimensions[1], $dimensions[1] * $dimensions[2], $dimensions[2] * $dimensions[0]);

    $totalRibbon += 2 * ($dimensions[0] + $dimensions[1]);
    $totalRibbon += $dimensions[0] * $dimensions[1] * $dimensions[2];
}

echo "Total square feet of wrapping paper needed: $totalPaper\n";
echo "Total feet of ribbon required: $totalRibbon\n";
