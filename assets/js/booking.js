const benefitCards =
document.querySelectorAll(".benefit-box");

const benefitObserver =
new IntersectionObserver(

(entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.style.opacity="1";

entry.target.style.transform=

"translateY(0px)";

}

});

},

{

threshold:0.2

}

);

benefitCards.forEach((card,index)=>{

card.style.opacity="0";

card.style.transform=

"translateY(80px)";

card.style.transition=

`all .8s ease ${index*0.15}s`;

benefitObserver.observe(card);

});

benefitCards.forEach(card=>{

card.addEventListener(

"mouseenter",

()=>{

benefitCards.forEach(c=>{

c.classList.remove("active");

});

card.classList.add("active");

}

);

});

// reading section js

const readingCards =
document.querySelectorAll(".reading-item");

readingCards.forEach(card=>{

card.addEventListener("mouseenter",()=>{

readingCards.forEach(item=>{

item.classList.remove("active");

});

card.classList.add("active");

});

});


const observer =
new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.animate([

{

opacity:0,

transform:"translateY(100px)"

},

{

opacity:1,

transform:"translateY(0px)"

}

],{

duration:900,

fill:"forwards"

});

}

});

});

readingCards.forEach(card=>{

observer.observe(card);

});

// pricing section js

const pricingCards =
document.querySelectorAll(".price-card");

pricingCards.forEach(card=>{

card.addEventListener(

"mouseenter",

()=>{

pricingCards.forEach(item=>{

item.classList.remove(

"featured-price"

);

});

card.classList.add(

"featured-price"

);

}

);

});


const pricingObserver =
new IntersectionObserver(

(entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.animate(

[

{

opacity:0,

transform:

"translateY(80px)"

},

{

opacity:1,

transform:

"translateY(0px)"

}

],

{

duration:900,

fill:"forwards"

}

);

}

});

}

);


pricingCards.forEach(card=>{

pricingObserver.observe(card);

}); 

// how booking work section js 

const bookingSteps =
document.querySelectorAll(".process-step");

bookingSteps.forEach(step=>{

step.addEventListener(

"mouseenter",

()=>{

bookingSteps.forEach(item=>{

item.classList.remove(

"active-step"

);

});

step.classList.add(

"active-step"

);

}

);

});


const processObserver =
new IntersectionObserver(

entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.animate(

[

{

opacity:0,

transform:

"translateY(80px)"

},

{

opacity:1,

transform:

"translateY(0)"

}

],

{

duration:900,

fill:"forwards"

}

);

}

});

},

{

threshold:.2

}

);


bookingSteps.forEach(step=>{

processObserver.observe(step);

});


// cancellation policy section js 

const policyCards =
document.querySelectorAll(".policy-card");

policyCards.forEach(card=>{

card.addEventListener(

"mouseenter",

()=>{

policyCards.forEach(item=>{

item.classList.remove(

"active-policy"

);

});

card.classList.add(

"active-policy"

);

}

);

});


const policyObserver =
new IntersectionObserver(

entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.animate(

[

{

opacity:0,

transform:

"translateY(80px)"

},

{

opacity:1,

transform:

"translateY(0)"

}

],

{

duration:900,

fill:"forwards"

}

);

}

});

},

{

threshold:.2

}

);


policyCards.forEach(card=>{

policyObserver.observe(card);

}); 

// faq section js

const faqCards =
document.querySelectorAll(".faq-card");

faqCards.forEach(card=>{

card.addEventListener(

"mouseenter",

()=>{

faqCards.forEach(item=>{

item.classList.remove("active");

});

card.classList.add("active");

}

);

});


const faqObserver =
new IntersectionObserver(

entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.animate(

[

{

opacity:0,

transform:

"translateY(80px)"

},

{

opacity:1,

transform:

"translateY(0)"

}

],

{

duration:900,

fill:"forwards"

}

);

}

});

},

{

threshold:.2

}

);


faqCards.forEach(card=>{

faqObserver.observe(card);

}); 

// faq section js 

const faqItems =
document.querySelectorAll(".faq-item");

faqItems.forEach(item=>{

item.addEventListener("click",()=>{

faqItems.forEach(card=>{

if(card!==item){

card.classList.remove("active");

}

});

item.classList.toggle("active");

});

}); 


// CTA section js

const bookingCTA = document.querySelector(
".booking-cta-container"
);

const ctaObserver = new IntersectionObserver(

(entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.animate(

[

{

opacity:0,

transform:

"translateY(100px)"

},

{

opacity:1,

transform:

"translateY(0)"

}

],

{

duration:1000,

fill:"forwards",

easing:"ease-out"

}

);

}

});

},

{

threshold:.25

}

);

ctaObserver.observe(
bookingCTA
); 
