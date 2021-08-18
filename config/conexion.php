<?php
$server = 'localhost';
$user = 'root';
$password= 'stalin14';
$database = 'base_proyecto';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $user, $password);
} catch (PDOException $error) {
    die('Conexion erronea: ' . $error->getMessage());
}
