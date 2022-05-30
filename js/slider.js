// counter to be used to move between images
let counter = 0;

// all images to be displayed in the slideshow
let myImages = [
  "images/latest0.jpg",
  "images/latest1.jpg",
  "images/latest2.jpg",
  "images/latest3.jpg",
  "images/latest4.jpg",
  "images/latest5.jpg",
  "images/latest6.jpg",
  "images/latest7.jpg",
  "images/latest8.jpg",
];

const time = 2000; // time for transition --> in miliseconds

let myButtons = document.querySelectorAll("button");

// previous button
myButtons[0].addEventListener("click", function () {
  counter > 0 ? counter-- : (counter = myImages.length - 1);
  console.log(counter);
  document.querySelector(".my-images").src = myImages[counter];
});

// next button
myButtons[1].addEventListener("click", function () {
  counter < myImages.length - 1 ? counter++ : (counter = 0);

  console.log(counter);
  document.querySelector(".my-images").src = myImages[counter];
});

// auto sliding
function slideShow() {
  document.querySelector(".my-images").src = myImages[counter];
  console.log(counter);
  counter < myImages.length - 1 ? counter++ : (counter = 0);
  setTimeout("slideShow()", time);
}

// Run function when page loads
window.onload = slideShow;
