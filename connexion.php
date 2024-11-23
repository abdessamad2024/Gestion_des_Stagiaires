<?php

// Database connection
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$dbname = 'ges_sta';

try {
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>