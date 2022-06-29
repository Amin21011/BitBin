<?php

include 'conn.php';

if (isset($_POST['PageContent'])) {
    $uniqueLink = $_GET[uniqid()] ?? '';
    
    $stmt = $pdo->prepare('INSERT INTO codedata (code, language, uniqueLink) 
VALUES (' .$_POST["editor"]. ', ' .$_POST["Code-Highlighting-Select"]. '$uniqueLink');

$stmt->execute([$uniqueLink]);

$stmt->debugDumpParams();
var_dump($stmt->fetchAll());

}

?>

<!DOCTYPE html>
<html>
        <head>
            <title>BitbinShare</title>
                <!-- Styling of the page -->
            <link rel="stylesheet" type="text/css" href="codestyle.css">
            <link rel="stylesheet" type="text/css" href="CodeMirror-5.65.4/lib/codemirror.css">
                <!-- Scripts for the page -->
            <script src="CodeMirror-5.65.4/lib/codemirror.js"></script>
            <script src="CodeMirror-5.65.4/mode/xml/xml.js"></script>
            <script src="CodeMirror-5.65.4/mode/css/css.js"></script>
            <script src="CodeMirror-5.65.4/mode/javascript/javascript.js"></script>
            <script src="CodeMirror-5.65.4/mode/php/php.js"></script>
            <script src="CodeMirror-5.65.4/mode/python/python.js"></script>
            <script src="CodeMirror-5.65.4/mode/clike/clike.js"></script>
            <script src="CodeMirror-5.65.4/mode/swift/swift.js"></script>
            <script src="CodeMirror-5.65.4/mode/sql/sql.js"></script>
                <!-- Addons for the page -->
            <script src="CodeMirror-5.65.4/addon/edit/closetag.js"></script>
            <script src="CodeMirror-5.65.4/addon/edit/matchbrackets.js"></script>
                <!-- Css for the textarea-->
            <link href="CodeMirror-5.65.4/theme/dracula.css" rel="stylesheet" type="text/css">
        </head>
    <body>
        <nav class="navbar">

            <a href="index.php" class="logo">
                <h1>BitBin</h1>
            </a>
    
            <div class="nav-links">
                <div class="nav-item"><a href="CodeField">Code</a></div>
            </div>
        </nav>
        <div class="Bitbin">
            <div class="Bitbin-form">
                <form action="SeeCode.php" method="post">
                    <div class="Bitbin-header">
                        <div class="Bitbin-Left">
                            <h3>Your code:</h3>
                        </div>
                        <div class="BitBin-dropdown">
                            <label class="Code-highlighting" for="Code-Highlighting-Select">Code-highlighting:</label>
                            <select id="Code-Highlighting-Select" name="Code-Highlighting-Select">
                                <option value="None">None</option>
                                <option value="xml">HTML</option>
                                <option value="css">CSS</option>
                                <option value="javascript">Javascript</option>
                                <option value="php">PHP</option>
                                <option value="python">Python</option>
                                <option value="text/x-csrc">C</option>
                                <option value="text/x-c++src">C++</option>
                                <option value="text/x-csharp">C#</option>
                                <option value="swift">Swift</option>
                                <option value="sql">SQL</option>
                            </select>
                        </div>
                    </div>
                    <div class="BitBin-textField">
                        <textarea id="editor" name="editor"><?php
                            if (isset($_POST["codefield"])) {
                                echo $_POST["codefield"];
                            }

                        ?></textarea>
                    </div>
                    <input type="submit" value="Share" name="PageContent">
                </form>
            </div>
        </div>
        <script src="textareamain.js"></script>
    </body>
</html>