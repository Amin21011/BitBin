<!DOCTYPE html>
<html lang="en">
<head>
    <title>BitbinShare</title>
        <!-- Styling of the page -->
    
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
    <link rel="stylesheet" href="Getcode.css">
</head>
        <body>
            <nav class="navbar">
                <a href="index.html" class="logo">
                    <h1>BitBin</h1>
                </a>

                <div class="nav-links">
                    <div class="nav-item">
                        <a href="CodeField.php">Code</a>
                    </div>
                </div>
            </nav>
            <?php
                $lang = $_POST["Code-Highlighting-Select"];
                $data = $_POST["editor"];
            ?>
            <h1>Here is your code!</h1>
            <textarea name="codeView" id="codeView" readonly><?php 
                if(isset($data)) {
                    echo $data;
                }
            ?></textarea>
        </body>
    <script>
        const editor = CodeMirror.fromTextArea(document.getElementById("codeView"), {
            lineNumbers: true,
            mode: "xml",
            theme: "dracula",
            autoCloseTags: true,
            matchBrackets: true,
            lineWrapping: true,
            viewportMargin: Infinity,
            readOnly: true,  
        });
    </script>
</html>