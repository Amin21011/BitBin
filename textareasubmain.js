/* Creating a new instance of CodeMirror and assigning it to the variable editor. */
const editor = CodeMirror.fromTextArea(document.getElementById("codefield"), {
    lineNumbers: true,
    mode: "xml",
    theme: "dracula",
    autoCloseTags: true,
    matchBrackets: true,
    lineWrapping: true
});