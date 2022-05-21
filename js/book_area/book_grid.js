const bookGrid = document.querySelector("#book-area");
const grid = bookGrid.querySelector(".grid");
const cards = grid.querySelectorAll(".book-card");
const bookmarks = grid.querySelectorAll(".fa-bookmark")

for(let card of cards){
    // console.log(card)
    card.addEventListener("mouseleave", showBookmark);
    card.addEventListener("mouseenter", showBookmark);
}

function showBookmark(event){
    const iTag = event.target.querySelector(".fa-bookmark")
    
    iTag.classList.toggle("show")
}

for(let bookmark of bookmarks){
    console.log(bookmark)
    bookmark.addEventListener("click", toggleBookmark)
    bookmark.addEventListener("mouseenter", hoverHint);
    bookmark.addEventListener("mouseleave", hoverHint);
}

function hoverHint(event){
    event.target.classList.toggle('hover')
}

function toggleBookmark(event){
    console.log(event.target)
    event.target.classList.toggle('fa-regular')
    event.target.classList.toggle('fa-solid')
    
}

