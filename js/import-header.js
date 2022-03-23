var header = new XMLHttpRequest();
header.open("GET", "telas/header.html", true);
header.send();
document.body.innerHTML += header.responseText;