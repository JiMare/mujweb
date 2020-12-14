<?php
/** @sk zdroj: https://jecas.cz/pdo */

// Připojovací údaje
define('SQL_HOST', 'database.skosacek.cz');
define('SQL_DBNAME', 'jmaresova');
define('SQL_USERNAME', 'jmaresova');
define('SQL_PASSWORD', 'q#3oJZbf^om2ArgUM*');

$dsn = 'mysql:dbname=' . SQL_DBNAME . ';host=' . SQL_HOST . ';charset=utf8mb4';
$user = SQL_USERNAME;
$password = SQL_PASSWORD;

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

?>