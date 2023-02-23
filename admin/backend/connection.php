<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'aria';

try {
  $connection = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $username, $password);
  $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

