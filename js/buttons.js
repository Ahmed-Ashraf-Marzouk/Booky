
const buttons = document.querySelectorAll(".orange-inset");


for(let button of buttons){
    const angle = button.querySelector(".fa-angle-right");
    button.addEventListener("mouseover", function (){
        angle.style.transform = "translateX(2px)";
        button.classList.add("hover-button")
        for(child of button.children){
            child.classList.add("hover-button-child");
        };
    });
    button.addEventListener("mouseout", function (){
        angle.style.transform = ""
        button.classList.remove("hover-button")
        for(child of button.children){
            child.classList.remove("hover-button-child");
        }
    });
}