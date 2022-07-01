const editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
    lineNumbers: true,
    mode: "xml",
    theme: "dracula",
    autoCloseTags: true,
    matchBrackets: true,
    lineWrapping: true
});

document.getElementById('Code-Highlighting-Select').addEventListener('change', (event) => {
    console.log(`Select language: [${event.target.value}]`);
    editor.setOption('mode', event.target.value);
});

/* Getting the value of the current URL and putting it into the textarea. */
var LinkArea = document.getElementById("LinkArea");
LinkArea.value = window.location.href;

/**
 * It copies the current URL to the clipboard.
 */
function CopyLink() {
    var Link = window.location.href;
    navigator.clipboard.writeText(Link)
    console.log("Link copied");
    const ButtonValue = document.getElementById("copyButton");
    ButtonValue.textContent = 'Copied';
};
