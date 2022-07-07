<?php
/* Connecting to the database. */
$servername = "projects.bit-academy.nl";
$username = "ani";
$password = "zyq2wmk@ceu!KAD8nkm";
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