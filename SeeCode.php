<?php
include 'conn.php';

$uniqid = $_GET['uniqid'] ?? '';
$updateViewers = "UPDATE codedata SET views = views + 1 WHERE uniqueLink = ?";
$updateStmt = $pdo->prepare($updateViewers);
$updateStmt->execute([$uniqid]);

$sql2 = "SELECT code,language, views FROM codedata WHERE uniqueLink = ? LIMIT 1";
$smtmt = $pdo->prepare($sql2);
$smtmt->execute([$uniqid]);
$result = $smtmt->fetch();
$code = $result['code'];
$language = $result['language'];
$views = $result['views'];
?>

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
    <link rel="stylesheet" href="SeeCode.css">
</head>
        <body>
            <nav class="navbar">
                <a href="index.php" class="logo">
                    <h1>BitBin</h1>
                </a>
                <h4 class="Views">Number of visitors: <?= $views ?> time</h4>
                <div class="nav-links">
                    <div class="nav-item">
                        <a href="CodeField.php">Code</a>
                    </div>
                </div>
            </nav>
            <div class="Bitbin-header">
                <div class="Bitbin-Left">
                    <h4 id="language" data-language="<?= $language ?>">Language Selected: <?= $language ?></h4>
                </div>
                <div class="BitBin-right">
                    <input type="text" id="LinkArea">
                    <button id="copyButton" onclick="CopyLink()">Copy Link</button> <br><br>
                </div>
            </div>
            <textarea name="codeView" id="codeView" readonly><?php 
                if(isset($code)) {
                    echo "$code";
                }   
            ?></textarea>
        </body>
    <script src="seecode.js"></script>
</html>