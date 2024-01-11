let first = document.querySelector(".navv");
let second = document.querySelector(".asidd");
let three = document.querySelector(".tablee");
let popy = document.querySelector(".popupfo");

let buttonpop = document.querySelector(".openpp");

buttonpop.addEventListener("click", function () {
  document.body.classList.toggle("active-popup");
  popy.classList.toggle("hidden");
});
three.addEventListener("click", function () {
  if (document.body.classList.contains("active-popup")) {
    document.body.classList.toggle("active-popup");
    popy.classList.toggle("hidden");
  }
});
