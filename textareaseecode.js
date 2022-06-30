const editor = CodeMirror.fromTextArea(document.getElementById("codeView"), {
    lineNumbers: true,
    mode: "xml",
    theme: "dracula",
    autoCloseTags: true,
    matchBrackets: true,
    lineWrapping: true,
    readOnly: true,  
});