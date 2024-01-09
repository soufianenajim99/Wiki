let first = document.querySelector(".navv");
let second = document.querySelector(".asidd");
let three = document.querySelector(".tablee");
let popy = document.querySelector(".popupfo");

let buttonpop = document.querySelector("#openpp");

buttonpop.addEventListener("click", function () {
  first.classList.toggle("active-popup");
  second.classList.toggle("active-popup");
  three.classList.toggle("active-popup");
  popy.classList.toggle("hidden");
  console.log("sccess");
});
