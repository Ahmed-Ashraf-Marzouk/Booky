const navbar = document.querySelector("#nav-bar");
const navContainer = navbar.querySelector("section.container");
const navbarRow = navbar.querySelector("ul.row");
const links = [...navContainer.querySelectorAll("li.cell")];

// Drop Down Menu /////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
    const popover = navbar.querySelector(".popover");
    const popoverContent = popover.querySelector(".content");
    const popoverBackground = popover.querySelector(".background");
    const popoverArrow = popover.querySelector(".arrow");
    const menuLinks = links.slice(1);
    const referenceLink = menuLinks[0];
    const referenceSection = referenceLink.getAttribute("sectionName");

    let timer = -1;
    let startTimer = false;

    document.addEventListener("visibilitychange", function(){
        popover.classList.remove("show");
    })

    popover.addEventListener("mouseleave", function(e){
        popover.classList.remove("show");
        moveDown();
    })

    navbarRow.addEventListener("mouseleave", function(e){
        startTimer = true;
        moveDown();
    })

    popover.style.left = `${(getLinkLeft(referenceLink) - 10)/10}rem`;

    popoverArrow.style.transform = 
    `translateX(${getRelativeLinkLeft(referenceLink) + 45}px) 
    rotate(45deg)`;
///////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////

// Sign Up Btn////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
const signUpBtn = navbar.querySelector(".cell.btn");
const signUpBtnBody = signUpBtn.querySelector(".btn-body");
let flashBtnTimer = -1;

function flashBtn(){
    flashBtnTimer = setInterval(function(){
        signUpBtnBody.classList.toggle("flash");
    }, 1000);
}


// flashBtn(); 

signUpBtnBody.addEventListener("mouseover", function(){
    // clearInterval(flashBtnTimer);
    signUpBtnBody.classList.add("flash");
    signUpBtnBody.classList.add("hover");
})

signUpBtnBody.addEventListener("mouseleave", function(){
    // flashBtn(); 
    signUpBtnBody.classList.remove("hover");
    signUpBtnBody.classList.remove("focus");
})

signUpBtnBody.addEventListener("mousedown", function(event){
    if(event.button === 0){
        signUpBtnBody.classList.add("focus");
    }
})

document.addEventListener("mouseup", function(event){
    signUpBtnBody.classList.remove("focus");
    if(event.button === 0){
    }
})
///////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////



for(let link of links){
    link.addEventListener("mouseenter", function(){
        moveDown();
        moveUp(link);

        if(menuLinks.includes(link)){
            menuLinksDropDown(link);
        }
    })
}


function menuLinksDropDown(link){    
    const sectionName = link.getAttribute("sectionName");
        
    popoverBackground.style.width = `${getSectionWidth(referenceSection)}px`;
    popoverBackground.style.height = `${getSectionHeight(referenceSection)}px`;

    popoverBackground.style.transform = 
    `translateX(${getRelativeLinkLeft(link)}px)
    scaleX(${ getSectionWidth(sectionName) / getSectionWidth(referenceSection) })
    scaleY(${ getSectionHeight(sectionName) / getSectionHeight(referenceSection) })`;

    popoverArrow.style.transform = `
    translateX(${getRelativeLinkLeft(link) + 6 + getLinkWidth(link)/2}px)
    rotate(45deg)`;

    popoverContent.style.width = `${getSectionWidth(sectionName)}px`;
    popoverContent.style.height = `${getSectionHeight(sectionName)}px`;

    popoverContent.style.transform = `translateX(${getRelativeLinkLeft(link)}px)`;

    if(startTimer){
        timer = setInterval(function(){
            popover.classList.add("show");
            showChildSection(sectionName);
            clearInterval(timer);
        }, 165)
        startTimer = false;
    }else{
        popover.classList.add("show");
            showChildSection(sectionName);
    }
}

function getSectionWidth(sectionName){
    const childSection = popover.querySelector(`.${sectionName}`);
    return childSection.getBoundingClientRect().width;
}


function getSectionHeight(sectionName){
    const childSection = popover.querySelector(`.${sectionName}`);
    return childSection.scrollHeight;
}


function showChildSection(sectionName){
    hideAllSections();
    const childSection = popover.querySelector(`.${sectionName}`);
    childSection.classList.add("active");
    return;
}


function hideAllSections(){
    const childSections = popover.querySelectorAll(".section")
    childSections.forEach(section => section.classList.remove("active"))
    return;
}


function getLinkLeft(link){
    let parentLeft = navbarRow.getBoundingClientRect().x;
    let selfLeft = link.getBoundingClientRect().x;
    return selfLeft - parentLeft
}


function getRelativeLinkLeft(link){
    let referenceLeft = referenceLink.getBoundingClientRect().x;
    let selfLeft = link.getBoundingClientRect().x;
    return selfLeft - referenceLeft
}


function getLinkWidth(link){
    return link.offsetWidth;
}