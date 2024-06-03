<?php

const FAMILY = [
    "Dad" => [
        "age" => 48,
        "strict" => 1,
        "quality" => [
            "knows how to cook"
        ],
        "defect" => [
            "shouts all the time for nothing",
            "sleeps all the time"
        ]
    ],
    "Mom" => [
        "age" => 51,
        "strict" => 5,
        "quality" => [
            "too sweet"
        ],
        "defect" => [
            "slacker"
        ]
    ],
    "Me" => [
        "age" => 18,
        "strict" => 0, // I don't intend to have children
        "quality" => [
            "too strong in development I swear"
        ],
        "defect" => [
            "slacker",
            "descolarized"
        ]
    ]
];

function getPersonDisplay(string $person, int $age, string $quality, string $defect): void
{
    echo "Person: $person" . PHP_EOL;
    echo "Age: $age" . PHP_EOL;
    echo "Quality: $quality" . PHP_EOL;
    echo "Defect: $defect" . PHP_EOL;
}

function broadcastAll(): void
{
    foreach (FAMILY as $person => $data) {
        echo PHP_EOL;
        getPersonDisplay($person, $data["age"] ?? 0, implode(", ", ($data["quality"] ?? ["Unknown"])), implode(", ", ($data["defect"] ?? ["Unknown"])));
    }
}
broadcastAll();