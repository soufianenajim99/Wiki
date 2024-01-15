const regex = {
  email: /^([a-z\d.-]+)@([a-z-]+).([a-z]{1,3})(.[a-z]{1,3})?$/,
  password: /^[a-zA-Z0-9!@#$%^&*]{6,16}$/,
};

let inputs = document.querySelectorAll("input");

function validate(input, regex) {
  if (regex.test(input.value)) {
    input.nextElementSibling.style.display = "none";
  } else {
    input.nextElementSibling.style.display = "block";
  }
}

inputs.forEach((input) =>
  input.addEventListener("focusout", function (event) {
    validate(event.target, regex[event.target.attributes.name.value]);
  })
);
