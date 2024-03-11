<?php

function add(int|float $firstInteger, int|float $secondInteger): float|int
{
    return $firstInteger + $secondInteger;
}

echo add(2, 55) . PHP_EOL;