const track = document.querySelector(".gallery-track");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");

let index = 0;

function getVisibleItems(){

    if(window.innerWidth <= 576){
        return 1;
    }

    if(window.innerWidth <= 991){
        return 2;
    }

    return 4;
}

function updateSlider(){

    const item = document.querySelector(".gallery-item");

    const gap = 25;

    const width = item.offsetWidth + gap;

    track.style.transform =
    `translateX(-${index * width}px)`;
}

nextBtn.addEventListener("click",()=>{

    const total =
    document.querySelectorAll(".gallery-item").length;

    const visible =
    getVisibleItems();

    if(index < total - visible){

        index++;

        updateSlider();
    }
});

prevBtn.addEventListener("click",()=>{

    if(index > 0){

        index--;

        updateSlider();
    }
});

window.addEventListener("resize",updateSlider);

updateSlider();