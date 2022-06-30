<?php

include 'conn.php';

$uniqueLink = uniqid();
$editor = $_POST["editor"];
$language = $_POST["Code-Highlighting-Select"];

$sql1 ="INSERT INTO codedata (code, language, uniqueLink) 
VALUES ('$editor', '$language', '$uniqueLink')";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();

$sql2 = "SELECT * FROM codedata";
$codeResult = $sql2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="SeeCode.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <a href="index.php" class="logo">
            <h1>BitBin</h1>
        </a>

        <div class="nav-links">
            <div class="nav-item">
                <a href="CodeField.php">Code</a>
            </div>
        </div>
    </nav>

    <h1>Here is your code!</h1>
    <textarea name="textblok" id="textblok" cols="100" rows="40" readonly><?php $stmt2?> </textarea>
</body>
</html>