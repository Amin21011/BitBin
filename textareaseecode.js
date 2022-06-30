const editor = CodeMirror.fromTextArea(document.getElementById("codeView"), {
    lineNumbers: true,
    mode: "<?= $language ?>",
    theme: "dracula",
    autoCloseTags: true,
    matchBrackets: true,
    lineWrapping: true,
    viewportMargin: Infinity,
    readOnly: true,  
});