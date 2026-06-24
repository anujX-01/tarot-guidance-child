// console.log("header.js loaded");
// const menuToggle =
// document.getElementById("menuToggle");


// const navbar =
// document.getElementById("navbar");
// console.log(menuToggle);
// console.log(navbar);

// if(menuToggle && navbar){

//     menuToggle.addEventListener("click", () => {

//         navbar.classList.toggle("active");

//     });

// } 


const menuToggle =
document.getElementById("menuToggle");

const navbar =
document.getElementById("navbar");

if(menuToggle && navbar){

    menuToggle.addEventListener("click", () => {

        console.log("Button Clicked");

        navbar.classList.toggle("active");

    });

} 