var nut = document.getElementById("show")
var chu = document.getElementById("hiden")

nut.addEventListener("click", function () {
    if (chu.style.display === "block") {
        console.log(chu.style.display);
        chu.style.display = "none";
    }
    else {
        console.log(chu.style.display);
        chu.style.display = "block";
    }
})