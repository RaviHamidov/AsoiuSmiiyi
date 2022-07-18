const sign_in_btn = document.querySelector("#sign-in-btn");
const container = document.querySelector(".container");

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
