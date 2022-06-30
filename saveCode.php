<?php

include 'conn.php';

$uniqueLink = uniqid();
$editor = $_POST["editor"];
$language = $_POST["Code-Highlighting-Select"];

$sql ="INSERT INTO codedata (code, language, uniqueLink) 
VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$editor, $language, $uniqueLink]);

header("Location: SeeCode.php?uniqid=$uniqueLink");