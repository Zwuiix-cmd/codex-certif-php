<?php

function getConnection(): PDO {
    $host = '127.0.0.1';
    $db = 'example';
    $user = 'root';
    $pass = 'please_set_my_rank_at_certified';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function fetchUsers(PDO $pdo): array {
    $stmt = $pdo->query('SELECT id, name, email FROM users');

    return $stmt->fetchAll();
}

try {
    $pdo = getConnection();

    $users = fetchUsers($pdo);

    if (!$users) {
        echo "No users found.\n";
        return;
    }

    foreach ($users as $user) {
        echo "ID: {$user['id']}, Name: {$user['name']}, Email: {$user['email']}" . PHP_EOL;
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage() . PHP_EOL;
}
