let first = document.querySelector(".navv");
let second = document.querySelector(".asidd");
let three = document.querySelector(".tablee");
let popy = document.querySelector(".popupfo");
let body = document.querySelector("body");

let buttonpop = document.querySelector(".openpp");

buttonpop.addEventListener("click", function () {
  // document.body.classList.toggle("opacity-50");
  first.classList.toggle("active-popup");
  second.classList.toggle("active-popup");
  three.classList.toggle("active-popup");
  popy.classList.toggle("hidden");
});
three.addEventListener("click", function () {
  if (first.classList.contains("active-popup")) {
    console.log("test");
    first.classList.toggle("active-popup");
    second.classList.toggle("active-popup");
    three.classList.toggle("active-popup");
    popy.classList.toggle("hidden");
  }
});
