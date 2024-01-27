<?php 
global $pdo;

$host = 'localhost';
$dbName = 'cycloninfo';
$username = 'root';
$password = '';

try { if (!isset($pdo)) $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password); }
catch (PDOException $e) { echo($e); }

?>