/* Creating a new instance of CodeMirror and assigning it to the variable `editor`. */
const editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
    lineNumbers: true,
    mode: "xml",
    theme: "dracula",
    autoCloseTags: true,
    matchBrackets: true,
    lineWrapping: true
});

/* Listening for a change event on the select element with the id of `Code-Highlighting-Select`. When
the event is triggered, it will log the value of the select element to the console and set the mode
of the editor to the value of the select element. */
document.getElementById('Code-Highlighting-Select').addEventListener('change', (event) => {
    console.log(`Select language: [${event.target.value}]`);
    editor.setOption('mode', event.target.value);
});
