let modals = document.querySelectorAll("[data-modal]");
console.log(modals);

let overlay = document.querySelector("[data-overlay]");
console.log(overlay);

modals.forEach((modal) => {
  modal.addEventListener("click", () => {
    modal.classList.toggle("modal");
    overlay.classList.toggle("hidden");
  });
});
