const genreFilter = document.querySelector("#genre")
const genreCheckbox = document.querySelectorAll(".genre_checkbox");

for(let checkbox of genreCheckbox){
    // console.log(checkbox)
    checkbox.style.border = '1px silid black'
    checkbox.addEventListener("click", toggleSelection);
    checkbox.addEventListener("mouseenter", highlight);
    checkbox.addEventListener("mouseout", highlight);
}

function toggleSelection(event){
    if(event.button !== 0){
        return
    }
    event.target.classList.toggle('selected');
}

function highlight(event){
    event.target.classList.toggle('hovered')
    console.log(event.target.className)
}