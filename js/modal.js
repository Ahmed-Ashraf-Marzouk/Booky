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

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    for (let index = 0; index < modals.length; index++) {
      let modal = modals[index];
      if (
        modal.classList.contains("modal") &&
        !overlay.classList.contains("hidden")
      ) {
        modal.classList.toggle("modal");
        overlay.classList.toggle("hidden");
      }
    }
  }
});

overlay.addEventListener("click", () => {
  for (let index = 0; index < modals.length; index++) {
    let modal = modals[index];
    if (
      modal.classList.contains("modal") &&
      !overlay.classList.contains("hidden")
    ) {
      modal.classList.toggle("modal");
      overlay.classList.toggle("hidden");
    }
  }
});
