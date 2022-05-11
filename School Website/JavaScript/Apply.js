function myFunction() {
    var x = document.getElementById("pass");
    var icon = document.querySelector("#i");
    if (x.type === "password") {
        x.type = "text";
        icon.style.color = "Red";
    } else {
        x.type = "password";
        icon.style.color = "black";
    }
}