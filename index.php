<?php

include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" type="text/css" href="CodeMirror-5.65.4/lib/codemirror.css">
        <!-- Scripts for the page -->
    <script src="CodeMirror-5.65.4/lib/codemirror.js"></script>
    <script src="CodeMirror-5.65.4/mode/xml/xml.js"></script>
    <!-- Addons for the page -->
    <script src="CodeMirror-5.65.4/addon/edit/closetag.js"></script>
    <script src="CodeMirror-5.65.4/addon/edit/matchbrackets.js"></script>
    <!-- Css for the textarea-->
    <link href="CodeMirror-5.65.4/theme/dracula.css" rel="stylesheet" type="text/css" />
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

        <div class="headText">
            <h1>Share your own beautiful code!</h1>
        </div>
        <div class="teksten">
            <div class="vak1">
                <h1>What is BitBin?</h1>
                <div class="tekst1">
                    <p>
                        BitBin is a platform that we created for easy sharing of anything
                        you write but especially your code. It gives you all the benefits of
                        a code editor with syntax highlighting and also shares it with your
                        friends and colleagues with one click. Once you published your code,
                        you get a unique link and with that link it will always stay
                        accessible! Unless you delete the code of course.
                    </p>
                </div>
            </div>

            <div class="vak2">
                <h1>How does BitBin work?</h1>
                <div class="tekst2">
                    <p>
                        BitBin is actually really simple you click on "Code" in the top
                        right. Then you will be directed to te page where you want to be to
                        get your unique link for your code. After that you need to put in
                        your code and select the right language you used and you can select
                        if you want it highlighted or not! The last step is to post it and
                        that's it! 
                    </p>
                </div>
            </div>
        </div>
        <div class="teksten2">
            <form action="CodeField.php" method="post">
                <div class="codeArea">
                    <div class="textArea">
                        
                        <textarea id="codefield" name="codefield"></textarea>
                    </div>
                    <div class="button">
                        <input type="submit" id="button" value="Enlarge">
                    </div>
                </div>
            </form>
            <div class="vak3">
                <h1>Is BitBin useful?</h1>
                <div class="tekst3">
                    <p>
                        BitBin is very useful since it can be used to send your own codes to
                        your friends or colleagues easily. When you posted your code, you
                        can find it back pretty fast!
                    </p>
                </div>
            </div>
        </div>
        <script src="textareasubmain.js"></script>
    </body> 
</html>