// navigation bar
function navigation() {
    var x = document.getElementById("mobile-menu");
    if (x.style.display === "block") {
        x.style.transition = "all 3s";
        x.style.display = "none";
        x.style.maxHeight = "0px";
    } else {
        x.style.transition = "all 3s";
        x.style.display = "block";
        x.style.maxHeight = "300px";
      }
  }