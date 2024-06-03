<?php

/**
 * @param string $entry
 * @param string $format
 * @return string
 */
function convertDate(string $entry, string $format): string
{
    $date = DateTime::createFromFormat("Y-m-d", $entry);
    if(!$date) {
        throw new InvalidArgumentException("Invalid Date");
    }

    return $date->format($format);
}

$entry = "2024-06-1";
$newFormat = "d/m/Y";
echo "It's my birthday on " . convertDate($entry, $newFormat) . PHP_EOL;