<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="SeeCode.css">
    <title>Document</title>
</head>
<body>
    <h1>Here is your code!</h1>
    <?php
    
    session_start();

    $_SESSION = $_POST["codeField"];
    $code = $_SESSION;
    ?>
    <textarea name="" id="" cols="30" rows="10"><?=$code?></textarea>
</body>
</html>