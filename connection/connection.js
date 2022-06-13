e = true;

function changer() {
    if (e) {
        document.getElementById("password").setAttribute("type", "text");
        document.getElementById("eye").src = "image/image1.jpg";
        e = false;
    } else {
        document.getElementById("password").setAttribute("type", "password");
        document.getElementById("eye").src = "image/image.jpg";
        e = true;
    }
}