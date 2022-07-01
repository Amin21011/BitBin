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

function CopyLink() {
    var Link = window.location.href;
    navigator.clipboard.writeText(Link)
    console.log("Link copied");
    
}