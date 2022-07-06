<?php

include 'conn.php';

$stmt = $pdo->prepare("CREATE TABLE codedata ('id int AUTO_INCREMENT PRIMARY KEY, code mediumtext, language VARCHAR(16), link VARCHAR(20)')")
?>