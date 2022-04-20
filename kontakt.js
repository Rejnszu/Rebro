// Kontakt animacja przycisku wysyłania

let sendBtn = document.getElementById("sendBtn");
let sendIcon = document.querySelector(".bi-send");
let sendText = document.querySelectorAll("#sendBtn > p");

sendBtn.addEventListener("click", function () {
  sendIcon.style.opacity = "1";
  this.children[0].style.opacity = "0";
});
