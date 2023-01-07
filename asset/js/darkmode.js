var icon = document.getElementById("icon");
icon.onclick = function () {
    document.body.classList.toggle("modegelap");
    if (document.body.classList.contains("modegelap")) {
        icon.src = "img/sun.png";
    } else {
        icon.src = "img/moon.png";
    }
}