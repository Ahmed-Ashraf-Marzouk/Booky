// counter to be used to move between images
let counter = 1;

const time = 3000; // time for transition --> in miliseconds

let rightButton = document.querySelector("[data-button-right]");
let leftButton = document.querySelector("[data-button-left]");
let topMember = document.querySelector("[data-top]");
let dots = document.querySelectorAll("[data-dot]");

// previous button
leftButton.addEventListener("click", function () {
  counter > 1 ? counter-- : (counter = 5);
  topMember.src = `media/images/${counter}.jpg`;
});

// next button
rightButton.addEventListener("click", function () {
  counter <= 5 ? counter++ : (counter = 1);
  topMember.src = `media/images/${counter}.jpg`;
});

// auto sliding

function slideShow() {
  topMember.src = `media/images/${counter}.jpg`;
  //   console.log(counter);
  dots[counter - 1].classList.toggle("dot--fill");
  counter < 5 ? counter++ : (counter = 1);
  setTimeout("slideShow()", time);
}

window.onload = slideShow;
