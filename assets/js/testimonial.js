const reveals = document.querySelectorAll(".reveal");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      }
    });
  },
  {
    threshold: 0.15,
  }
);

reveals.forEach((item) => {
  observer.observe(item);
}); 

const successReveal = document.querySelectorAll(
  ".reveal-left, .reveal-right"
);

const successObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      }
    });
  },
  {
    threshold: 0.15,
  }
);

successReveal.forEach((item) => {
  successObserver.observe(item);
}); 


const trustBoxes = document.querySelectorAll(".reveal-up");

const trustBoxObserver = new IntersectionObserver(
(entries)=>{
entries.forEach((entry)=>{
if(entry.isIntersecting){
entry.target.classList.add("active");
}
});
},
{
threshold:0.15
}
);

trustBoxes.forEach((box)=>{
trustBoxObserver.observe(box);
});

const counters = document.querySelectorAll(".counter");

const counterObserver = new IntersectionObserver(
(entries)=>{
entries.forEach((entry)=>{

if(entry.isIntersecting){

const counter = entry.target;
const target = +counter.dataset.target;

let current = 0;

const update = ()=>{

current += target / 120;

if(current < target){

counter.innerText =
Math.floor(current);

requestAnimationFrame(update);

}else{

if(target === 98){

counter.innerText =
target + "%";

}else{

counter.innerText =
target.toLocaleString() + "+";

}

}

};

update();

counterObserver.unobserve(counter);

}

});
},
{
threshold:.4
}
);

counters.forEach((counter)=>{
counterObserver.observe(counter);
});


/* FAQ Accordion */

const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item)=>{

    const button = item.querySelector(".faq-question");

    button.addEventListener("click",()=>{

        faqItems.forEach((faq)=>{

            if(faq !== item){
                faq.classList.remove("active");
            }

        });

        item.classList.toggle("active");

    });

});

/* Scroll Reveal */

const faqReveal = document.querySelectorAll(
".reveal-left, .reveal-right, .reveal-fade"
);

const faqObserver = new IntersectionObserver(
(entries)=>{

entries.forEach((entry)=>{

if(entry.isIntersecting){

entry.target.classList.add("active-show");

}

});

},
{
threshold:0.15
}
);

faqReveal.forEach((item)=>{
faqObserver.observe(item);
}); 

const ctaElements = document.querySelectorAll(
".reveal-left, .reveal-right"
);

const ctaObserver = new IntersectionObserver(
(entries)=>{
entries.forEach((entry)=>{
if(entry.isIntersecting){
entry.target.classList.add("active");
}
});
},
{
threshold:0.2
}
);

ctaElements.forEach((item)=>{
ctaObserver.observe(item);
}); 

