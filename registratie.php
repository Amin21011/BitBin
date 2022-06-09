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
?>

<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
    <body>
    <nav class="navbar">
        <a href="#" class="logo">
            <h1>BitBin</h1>
        </a>
        <div class="nav-links">
            <div class="nav-item"><a href="#Code">Code</a></div>
            <div class="nav-item"><a href="#Login">Log in</a></div>
            <div class="nav-item"><a href="#SignUp">Sign up</a></div>
        </div>
    </nav>
        <form method="post">
            <table>
                <p class="form-input">Username : </p>
                <div class="form-input">
                <input type="text" name="Username" required placeholder=" Enter your Username">
                </div>
                <br>
                <p class="form-input">Password : </p>
                <div class="form-input">
                <input type="text" name="Wachtwoord" required placeholder=" Enter your Password">
                </div>
                <br>
                <div class="form-input">
                <input type="submit" value="Sign Up" name="submit">
                </div>
            </table>
        </form>
    </body>
 </html>


 <?php
/* Inserting the data into the database. */
    if (isset($_POST['submit'])) {
        $Username = $_POST['Username'];
        $Wachtwoord = $_POST['Wachtwoord'];

        $sql = "INSERT INTO gebruikers (Username, Wachtwoord)
    VALUES ('$Username', '$Wachtwoord')";
        $conn->query($sql);
        header("location: index.php");
    }
    ?>