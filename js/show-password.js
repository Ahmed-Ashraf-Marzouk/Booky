
const showPassword = document.querySelector("#show-password");
const hidePassword = document.querySelector("#hide-password");


const cshowPassword = document.querySelector("#cshow-password");
const chidePassword = document.querySelector("#chide-password");

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




cshowPassword.addEventListener("click", function(){
    const cpasswordInput = document.querySelector("#scpassword");
    cpasswordInput.type = "text";

    cshowPassword.classList.toggle("hide");
    chidePassword.classList.toggle("hide");
})

chidePassword.addEventListener("click", function(){
    const cpasswordInput = document.querySelector("#scpassword");
    cpasswordInput.type = "password"; 

    cshowPassword.classList.toggle("hide");
    chidePassword.classList.toggle("hide");
})


console.log('asdas');