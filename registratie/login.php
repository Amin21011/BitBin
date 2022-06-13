<?php

$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
$dbName = "project2";

// Connectie met de database maken
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

session_start();

/* Checking if the login button is pressed. If it is pressed it will get the username and password from
the form. */
if (isset($_POST['login'])) {
    $username = $_POST['Username'];
    $password = $_POST['Wachtwoord'];

    $sql = "SELECT * FROM `gebruikers`";
/* The form where the user can enter his username and password. */
    $sql = $conn->query($sql);
    $sql = $sql->fetchAll(PDO::FETCH_ASSOC);

/* Checking if the username and password are correct. If they are correct it will redirect you to the
index.php page. If they are not correct it will echo "Login mislukt".</code> */
    foreach ($sql as $row) {
        if ($row['Username'] == $username && $row['Wachtwoord'] == $password) {
            $_SESSION['Username'] = $username;
            header("location: /phpfolder/Verdieping-f85d899f-d4b19a2a/Homepage/homepage.html");
        } else {
            echo "Login mislukt";
        }
    }
}

?>


<html>
    <head>
  <link rel="stylesheet" href="style.css">
</head>
    <body>
    <nav class="navbar">

        <a href="/phpfolder/Verdieping-f85d899f-d4b19a2a/Homepage/homepage.html" class="logo">
            <h1>BitBin</h1>
        </a>
        <div class="nav-links">
            <div class="nav-item"><a href="/phpfolder/Verdieping-f85d899f-d4b19a2a/Codefield/CodeField.html">Code</a></div>
            <div class="nav-item"><a href="/phpfolder/Verdieping-f85d899f-d4b19a2a/registratie/login.php">Log in</a></div>
            <div class="nav-item"><a href="/phpfolder/Verdieping-f85d899f-d4b19a2a/registratie/registratie.php">Sign up</a></div>
        </div>
    </nav>
        <form method="POST">
        <table>
            <p class="form-input">Username : </p>
            <div class="form-input">
                <input type="text" name="Username" placeholder=" Enter your Username">
                </div>
                <br>
                <p class="form-input">Password : </p>
                <div class="form-input">
                <input type="text" name="Wachtwoord" placeholder=" Enter your Password">
                </div>
                <br>
                <div class="form-input">
                <input type="submit" name="login" value="Login">
                </div>
        </table>
    </body>
    <h2>
    <a href="registratie.php">Sign Up</a>
    </h2>
</html>
