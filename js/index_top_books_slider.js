const bookSlider = document.querySelector("#trending-books-slider")
const container = bookSlider.querySelector(".container")
const spans = container.querySelectorAll(":scope > span")
const divs = container.querySelectorAll(":scope > div")

const images = [...spans]
const images_count = images.length
let current_index = 2
const arrows = [...divs]

const left_arrow = arrows[0]
const right_arrow = arrows[1]
let lastMove = Date.now();

left_arrow.addEventListener("click", function(event){
    if(event.button !== 0){
        return
    }

    if(Date.now() - lastMove < 600) {
        return
    } 

    lastMove = Date.now();
    
    let el = images.shift()
    images.push(el)

    images[0].className = "hidden left"

    images[1].className = "left"

    images[2].className = "current"

    images[3].className = "right"

    images[4].className = "right hidden"
})

right_arrow.addEventListener("click", function(event){
    if(event.button !== 0){
        return
    }

    if(Date.now() - lastMove < 600) {
        return
    } 

    lastMove = Date.now();

    let el = images.pop()
    images.unshift(el)

    images[0].className = "hidden left"

    images[1].className = "left"

    images[2].className = "current"

    images[3].className = "right"

    images[4].className = "right hidden"
})

left_arrow.addEventListener("mouseenter", function(event){
    event.target.style.width = "3.5%"
})

right_arrow.addEventListener("mouseenter", function(event){
    event.target.style.width = "3.5%"
})

left_arrow.addEventListener("mouseleave", function(event){
    event.target.style.width = "2.5%"
})

right_arrow.addEventListener("mouseleave", function(event){
    event.target.style.width = "2.5%"
})

