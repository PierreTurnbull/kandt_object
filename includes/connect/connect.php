<?php
$dbname     = "kandt";
$host       = "localhost:3306";
$username   = "root";
$password   = "root";
try {
    $connection = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $username, $password);
} catch(PDOException $exception) {
    echo "Connection error.";
    exit;
}