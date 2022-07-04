/* A code editor that is used to display the code in the textarea. */
const editor = CodeMirror.fromTextArea(document.getElementById("codeView"), {
    lineNumbers: true,
    mode: "xml",
    theme: "dracula",
    autoCloseTags: true,
    matchBrackets: true,
    lineWrapping: true,
    readOnly: true,
 });

/* Setting the language of the code editor to the language of the code. */
console.log( document.getElementById('language').dataset.language);
editor.setOption('mode', document.getElementById('language').dataset.language);

/**
 * It copies the link of the current page to the clipboard
 */
var LinkArea = document.getElementById("LinkArea");
LinkArea.value = window.location.href;

function CopyLink() {
    var Link = window.location.href;
    navigator.clipboard.writeText(Link)
    console.log("Link copied");
    const ButtonValue = document.getElementById("copyButton");
    ButtonValue.textContent = 'Link Copied';
};