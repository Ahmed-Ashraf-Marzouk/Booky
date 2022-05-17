// const navBar = document.querySelector("#nav-bar");
// const navBarSection = navBar.querySelector("section");
// const navBarSectionButtons = navBarSection.querySelectorAll(":scope > li");
// // for(let li of navBarSectionButtons){
// //     li.addEventListener("mouseover", function(){
// //         li.querySelector("div").classList.remove("hide-menu");
// //         li.querySelector("div").classList.add("show-menu");
// //     })
// //     li.addEventListener("mouseout", function(){
// //         li.querySelector("div").classList.add("hide-menu");
// //         li.querySelector("div").classList.remove("show-menu");
// //     })
// // }
// const box = document.querySelector('#menu');
// setInterval(() => {
//   box.classList.toggle('next');
// }, 2000);
// const sections = ['products', 'developers', 'company'];
// const sectionEls = document.querySelectorAll('.section');

// let sectionCount = 0;

// // TODO: generate on the fly
// const dimensions = {
//   products: { width: 490, height: 280, x: 0 },
//   developers: { width: 390, height: 266, x: 100 },
//   company: { width: 260, height: 296, x: 200 }
// }

// const originalWidth = dimensions.products.width;
// const originalHeight = dimensions.products.height;

// const backgroundEl = document.querySelector('.background');
// const contentEl = document.querySelector('.content');

// function showSection(section) {
//   sectionEls.forEach(el => el.classList.remove('active'));  
//   document.querySelector(`.section-${section}`).classList.add('active');

//   // Resize and position background
//   backgroundEl.style.transform = `
//     translateX(${ dimensions[section].x }px)
//     scaleX(${ dimensions[section].width / originalWidth })
//     scaleY(${ dimensions[section].height / originalHeight })
//   `;

//   // Position content
//   contentEl.style.transform = `translateX(${ dimensions[section].x }px)`

//   // size container? If we remove from CSS and do everything dynamically.
// }


// setInterval(() => {
//   showSection(sections[sectionCount % 3]);
//   sectionCount++;
// }, 1500);

const sectionEls = document.querySelectorAll('.section');
const headerEl = document.querySelector('#nav-bar');
const navLinkEls = Array.from(document.querySelectorAll('section > li')).slice(1);
console.log(navLinkEls);
const popoverEl = document.querySelectorAll('.popover');
const contentEl = document.querySelectorAll('.content');
const arrowEl = document.querySelector('.arrow');
const backgroundEl = document.querySelectorAll('.background');


const sections = ['products', 'developers', 'company'];

// TODO: generate on the fly
const dimensions = {
  products: { width: 284.975, height: 197.800, x: 0 },
  developers: { width: 100.450, height: 197.800, x: 0 },
  company: { width: 200.900, height: 174.700, x: 0 }
}

const popoverLeft = popoverEl.getBoundingClientRect().x;

// navLinkEls.forEach((navLink) => {
//   let section =  navLink.getAttribute('data-nav');
//   let rect = navLink.getBoundingClientRect();
//   console.log();
//   dimensions[section].arrowX = rect.left + (rect.width / 2) - popoverLeft;
// });

// let rect = sectionEls[0].getBoundingClientRect();
// dimensions['products'].width = parseInt(getComputedStyle(sectionEls[0]).width) + 10; //sectionEls[0].clientWidth// rect.width + 10/2;
// dimensions['products'].height = parseInt(getComputedStyle(sectionEls[0]).height) + 20; //sectionEls[0].clientHeight//rect.height + 20/2;
// console.log(parseInt(getComputedStyle(sectionEls[0]).width))
// // dimensions['products'].x = rect.x;

// rect = sectionEls[1].getBoundingClientRect();
// dimensions['developers'].width = parseInt(getComputedStyle(sectionEls[1]).width) + 10; //sectionEls[1].clientWidth//rect.width + 11/2;
// dimensions['developers'].height = parseInt(getComputedStyle(sectionEls[1]).height) + 20; //sectionEls[1].clientHeight//rect.height + 20/2;
// // dimensions['developers'].x = rect.x;

// rect = sectionEls[2].getBoundingClientRect();
// dimensions['company'].width = parseInt(getComputedStyle(sectionEls[2]).width) + 10; //sectionEls[2].clientWidth//rect.width + 10/2;
// dimensions['company'].height = parseInt(getComputedStyle(sectionEls[2]).height) + 20; //sectionEls[2].clientHeight//rect.height + 20/2;
// // dimensions['company'].x = rect.x;


// backgroundEl.style.left = `${dimensions['products'].x}rem`
const sectionMap = {
    products: 0,
    developers: 1,
    company: 2
}
function showSection(section) {
    const elNum = sectionMap[section];
    // console.log(section)
    popoverEl[elNum].classList.add('open');
    sectionEls.forEach(el => el.classList.remove('active'));
    // dimensions[section].width = parseInt(getComputedStyle(sectionEls[sectionMap[section]]).width);
    // dimensions[section].height = parseInt(getComputedStyle(sectionEls[sectionMap[section]]).height);
    // console.log(section, sectionMap[section], dimensions[section].width, dimensions[section].height)
    document.querySelector(`.section-${section}`).classList.add('active');
    
    backgroundEl[elNum].style.width = `${dimensions['products'].width}px`
    backgroundEl[elNum].style.height = `${dimensions['products'].height}px`
    // Position arrow
    // arrowEl.style.transform = `
    //   translateX(${dimensions[section].arrowX}px)
    //   rotate(45deg)`;
    
    // Resize and position background
    backgroundEl[elNum].style.transform = `
      translateX(${dimensions[section].x}rem)
      scaleX(${ dimensions[section].width / dimensions['products'].width })
      scaleY(${ dimensions[section].height / dimensions['products'].height })
    `;
    // backgroundEl.style.transform = `
    //   translateX(${ dimensions[section].x - dimensions['products'].x }rem)
    //   scaleX(${ dimensions[section].width / dimensions['products'].width })
    //   scaleY(${ dimensions[section].height / dimensions['products'].height })
    // `;
    
    // Resize and position content
    contentEl[elNum].style.width = dimensions[section].width + 'px';
    contentEl[elNum].style.height = dimensions[section].height + 'px';
  
    contentEl[elNum].style.transform = `translateX(${ dimensions[section].x - dimensions['products'].x }rem)`
  
    // size container? If we remove from CSS and do everything dynamically.
  }
  
  
  navLinkEls.forEach((navLink) => {
    navLink.addEventListener('mouseenter', (event) => {
      let targetPopover = event.target.getAttribute('data-nav');
    //   console.log(targetPopover);
      showSection(targetPopover);
    });
  });
  
  headerEl.addEventListener('mouseleave', () => {
    popoverEl.classList.remove('open');  
  })
  