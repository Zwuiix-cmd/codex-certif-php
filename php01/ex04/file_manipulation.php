<?php

function readFileAt(string $path): string
{
    if (!file_exists($path)) {
        throw new InvalidArgumentException("File not exist");
    }

    $content = file_get_contents($path);
    if ($content === false) {
        throw new InvalidArgumentException("Impossible to read");
    }

    return $content;
}

function writeFileAt(string $path, string $content): void
{
    $written = file_put_contents($path, $content);
    if ($written === false) {
        throw new Error("Impossible to write");
    }
}

$content = readFileAt("input.txt");

$content = ucwords($content);

$splitPoint = explode(".", $content);
$content = implode(".\n", $splitPoint);

writeFileAt("output.txt", $content);
echo "Success";
