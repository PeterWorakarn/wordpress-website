let acc = document.getElementsByClassName("ac-header");
let i;


for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    panel.classList.toggle("active-panel")
  });
}