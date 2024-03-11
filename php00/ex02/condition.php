<?php

$number = mt_rand(1, 5000);
echo "Le nombre $number est " . (($number % 2) === 0 ? "pair" : "impair") . PHP_EOL;