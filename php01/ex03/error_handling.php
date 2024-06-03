<?php

function divide(int|float $first, int|float $second): float|int
{
    if($second == 0) return 0;

    try {
        $value = $first / $second;
    } catch (Exception $e) {
        return 0;
    }
    return $value;
}

echo "Divide: " . divide(5, 0);