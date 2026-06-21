const aboutSlides =
document.querySelectorAll(
".about-testimonial-slide"
);

const aboutNext =
document.querySelector(
".about-next"
);

const aboutPrev =
document.querySelector(
".about-prev"
);

let aboutCurrent = 0;

function showAboutSlide(index){

    aboutSlides.forEach(slide=>{

        slide.classList.remove("active");

    });

    aboutSlides[index]
    .classList.add("active");
}

aboutNext.addEventListener("click",()=>{

    aboutCurrent++;

    if(
        aboutCurrent >=
        aboutSlides.length
    ){
        aboutCurrent = 0;
    }

    showAboutSlide(
        aboutCurrent
    );
});

aboutPrev.addEventListener("click",()=>{

    aboutCurrent--;

    if(
        aboutCurrent < 0
    ){
        aboutCurrent =
        aboutSlides.length - 1;
    }

    showAboutSlide(
        aboutCurrent
    );
});

setInterval(()=>{

    aboutCurrent++;

    if(
        aboutCurrent >=
        aboutSlides.length
    ){
        aboutCurrent = 0;
    }

    showAboutSlide(
        aboutCurrent
    );

},5000);