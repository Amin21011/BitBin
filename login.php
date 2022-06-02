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
            header("location: index.php");
        } else {
            echo "Login mislukt";
        }
    }
}

?>


<html>
    <body>
        <h1>
            Login OR Sign Up
        </h1>
     /* The form where you can enter your username and password. */
        <table>
            <form method="POST">
            <div class="form_input">
                <input type="text" name="Username" placeholder=" Enter your Username">
                </div>
                <div class="form_input">
                <input type="text" name="Wachtwoord" placeholder=" Enter your Password">
                </div>
                <input type="submit" name="login" value="Login">
        </table>
    </body>
    <a href="registratie.php">Sign Up</a>
</html>
