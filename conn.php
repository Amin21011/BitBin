<?php
/* Connecting to the database. */
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
$dbName = "ani";

// Connectie met de database maken
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>