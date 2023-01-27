require('./bootstrap');

const hamburgerButton = document.querySelector(".hamburger");
const popup = document.querySelector(".popup");

hamburgerButton.addEventListener("click", () => {
  popup.classList.toggle("active");

  if (popup.classList.contains("active")) {
    hamburgerButton.querySelector("img").src = "./assets/close.svg";
  } else {
    hamburgerButton.querySelector("img").src = "./assets/hamburger.svg";
  }
})