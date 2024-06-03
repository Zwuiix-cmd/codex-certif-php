<?php

function clean(string $input): string {
    return htmlspecialchars(strip_tags($input), ENT_QUOTES, 'UTF-8');
}

$input = '<script>alert("XSS Attack!");</script> Hello, World!';
echo "Before: $input" . PHP_EOL;
echo "After: " . clean($input) . PHP_EOL;
