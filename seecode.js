const editor = CodeMirror.fromTextArea(document.getElementById("codeView"), {
    lineNumbers: true,
    mode: "xml",
    theme: "dracula",
    autoCloseTags: true,
    matchBrackets: true,
    lineWrapping: true,
    readOnly: true,  
});

function CopyLink() {
    var Link = window.location.href;
    navigator.clipboard.writeText(Link)
    console.log("Link copied");
    
}