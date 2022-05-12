
const showPassword = document.querySelector("#show-password");
const hidePassword = document.querySelector("#hide-password");

showPassword.addEventListener("click", function(){
    const passwordInput = document.querySelector("#password");
    passwordInput.type = "text";

    showPassword.classList.toggle("hide");
    hidePassword.classList.toggle("hide");
})

hidePassword.addEventListener("click", function(){
    const passwordInput = document.querySelector("#password");
    passwordInput.type = "password"; 

    showPassword.classList.toggle("hide");
    hidePassword.classList.toggle("hide");
})
