function moveUp(link){
    let a = link.querySelector("a");
    a.classList.add('hover')
}

function moveDown(){
    links.forEach((link) => link.querySelector("a").classList.remove('hover'))
}