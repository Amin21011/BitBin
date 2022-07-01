
var LinkArea = document.getElementById("LinkArea");
LinkArea.value = window.location.href;

function CopyLink() {
    var Link = window.location.href;
    navigator.clipboard.writeText(Link)
    console.log("Link copied");
    const ButtonValue = document.getElementById("copyButton");
    ButtonValue.textContent = 'Copied';
};