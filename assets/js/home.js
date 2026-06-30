const testimonialSlides =
document.querySelectorAll(".testimonial-slide");

const nextBtn =
document.querySelector(".next-btn");

const prevBtn =
document.querySelector(".prev-btn");

let currentSlide = 0;

function showSlide(index){

    testimonialSlides.forEach(slide=>{
        slide.classList.remove("active");
    });

    testimonialSlides[index].classList.add("active");
}

nextBtn.addEventListener("click",()=>{

    currentSlide++;

    if(currentSlide >= testimonialSlides.length){
        currentSlide = 0;
    }

    showSlide(currentSlide);

});

prevBtn.addEventListener("click",()=>{

    currentSlide--;

    if(currentSlide < 0){
        currentSlide =
        testimonialSlides.length - 1;
    }

    showSlide(currentSlide);

});

/* Auto Slide */

setInterval(()=>{

    currentSlide++;

    if(currentSlide >= testimonialSlides.length){
        currentSlide = 0;
    }

    showSlide(currentSlide);

},5000);  

const faqItems =
document.querySelectorAll(".faq-item");

faqItems.forEach(item=>{

    const question =
    item.querySelector(".faq-question");

    question.addEventListener("click",()=>{

        item.classList.toggle("active");

    });

});