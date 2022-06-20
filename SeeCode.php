<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="SeeCode.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <a href="/~ani/" class="logo">
        <h1>BitBin</h1>
    </a>

    <div class="nav-links">
        <div class="nav-item">
            <a href="/~ani/CodeField.html">Code</a>
        </div>
    </div>
    </nav>
    <h1>Here is your code!</h1>
    <?php
    
    session_start();

    $_SESSION = $_POST["codeField"];
    $code = $_SESSION;
    ?>
    <textarea name="" id="" cols="30" rows="10"><?=$code?></textarea>
</body>
</html>