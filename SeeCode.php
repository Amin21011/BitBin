<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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