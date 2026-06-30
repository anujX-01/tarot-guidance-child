const filterButtons = document.querySelectorAll(".tarot-filter-btn");

filterButtons.forEach(button => {
    button.addEventListener("click", () => {

        filterButtons.forEach(btn =>
            btn.classList.remove("active")
        );

        button.classList.add("active");

    });
});

// tarot card grid section js 

// const filterButtons = document.querySelectorAll(".tarot-filter-btn");

// if(filterButtons.length > 0){

//     filterButtons.forEach(button => {

//         button.addEventListener("click", () => {

//             filterButtons.forEach(btn => {
//                 btn.classList.remove("active");
//             });

//             button.classList.add("active");

//         });

//     });

// }

const tarotCards = [

{ name:"The Fool", category:"major", image:"The_Fool.png", description:"New beginnings, freedom and adventure." },
{ name:"The Magician", category:"major", image:"The_Magician.png", description:"Manifestation, skill and confidence." },
{ name:"The High Priestess", category:"major", image:"The_High_Priestess.png", description:"Intuition, mystery and inner wisdom." },
{ name:"The Empress", category:"major", image:"The_Empress.png", description:"Abundance, beauty and nurturing energy." },
{ name:"The Emperor", category:"major", image:"The_Emperor.png", description:"Authority, structure and leadership." },
{ name:"The Hierophant", category:"major", image:"The_Hierophant.png", description:"Tradition, wisdom and spiritual guidance." },
{ name:"The Lovers", category:"major", image:"The_Lovers.png", description:"Love, harmony and meaningful choices." },
{ name:"The Chariot", category:"major", image:"The_Chariot.png", description:"Determination, control and victory." },
{ name:"Strength", category:"major", image:"Strength.png", description:"Courage, patience and inner strength." },
{ name:"The Hermit", category:"major", image:"The_Hermit.png", description:"Reflection, solitude and wisdom." },
{ name:"Wheel of Fortune", category:"major", image:"Wheel_of_Fortune.png", description:"Destiny, cycles and change." },
{ name:"Justice", category:"major", image:"Justice.png", description:"Truth, balance and fairness." },
{ name:"The Hanged Man", category:"major", image:"The_Hanged_Man.png", description:"Surrender, perspective and patience." },
{ name:"Death", category:"major", image:"Death.png", description:"Transformation, endings and rebirth." },
{ name:"Temperance", category:"major", image:"Temperance.png", description:"Balance, moderation and harmony." },
{ name:"The Devil", category:"major", image:"The_Devil.png", description:"Temptation, attachment and illusion." },
{ name:"The Tower", category:"major", image:"The_Tower.png", description:"Sudden change and awakening." },
{ name:"The Star", category:"major", image:"The_Star.png", description:"Hope, healing and inspiration." },
{ name:"The Moon", category:"major", image:"The_Moon.png", description:"Intuition, dreams and uncertainty." },
{ name:"The Sun", category:"major", image:"The_Sun.png", description:"Success, joy and positivity." },
{ name:"Judgement", category:"major", image:"Judgement.png", description:"Awakening, renewal and purpose." },
{ name:"The World", category:"major", image:"The_World.png", description:"Completion, achievement and fulfillment." },


{ name:"Ace of Cups", category:"cups", image:"Ace_of_Cups.png", description:"Love, emotion and new feelings." },
{ name:"Two of Cups", category:"cups", image:"Two_of_Cups.png", description:"Partnership, attraction and unity." },
{ name:"Three of Cups", category:"cups", image:"Three_of_Cups.png", description:"Celebration, friendship and joy." },
{ name:"Four of Cups", category:"cups", image:"Four_of_Cups.png", description:"Contemplation and reevaluation." },
{ name:"Five of Cups", category:"cups", image:"Five_of_Cups.png", description:"Loss, regret and healing." },
{ name:"Six of Cups", category:"cups", image:"Six_of_Cups.png", description:"Nostalgia and happy memories." },
{ name:"Seven of Cups", category:"cups", image:"Seven_of_Cups.png", description:"Choices, dreams and imagination." },
{ name:"Eight of Cups", category:"cups", image:"Eight_of_Cups.png", description:"Walking away and self-discovery." },
{ name:"Nine of Cups", category:"cups", image:"Nine_of_Cups.png", description:"Satisfaction and wishes fulfilled." },
{ name:"Ten of Cups", category:"cups", image:"Ten_of_Cups.png", description:"Happiness and emotional fulfillment." },
{ name:"Page of Cups", category:"cups", image:"Page_of_Cups.png", description:"Creativity and emotional messages." },
{ name:"Knight of Cups", category:"cups", image:"Knight_of_Cups.png", description:"Romance and following the heart." },
{ name:"Queen of Cups", category:"cups", image:"Queen_of_Cups.png", description:"Compassion and intuition." },
{ name:"King of Cups", category:"cups", image:"King_of_Cups.png", description:"Emotional balance and wisdom." },


{ name:"Ace of Pentacles", category:"pentacles", image:"Ace_of_Pentacles.png", description:"Opportunity and prosperity." },
{ name:"Two of Pentacles", category:"pentacles", image:"Two_of_Pentacles.png", description:"Balance and adaptability." },
{ name:"Three of Pentacles", category:"pentacles", image:"Three_of_Pentacles.png", description:"Teamwork and skill." },
{ name:"Four of Pentacles", category:"pentacles", image:"Four_of_Pentacles.png", description:"Security and control." },
{ name:"Five of Pentacles", category:"pentacles", image:"Five_of_Pentacles.png", description:"Hardship and recovery." },
{ name:"Six of Pentacles", category:"pentacles", image:"Six_of_Pentacles.png", description:"Generosity and support." },
{ name:"Seven of Pentacles", category:"pentacles", image:"Seven_of_Pentacles.png", description:"Patience and long-term growth." },
{ name:"Eight of Pentacles", category:"pentacles", image:"Eight_of_Pentacles.png", description:"Dedication and mastery." },
{ name:"Nine of Pentacles", category:"pentacles", image:"Nine_of_Pentacles.png", description:"Luxury and independence." },
{ name:"Ten of Pentacles", category:"pentacles", image:"Ten_of_Pentacles.png", description:"Legacy and abundance." },
{ name:"Page of Pentacles", category:"pentacles", image:"Page_of_Pentacles.png", description:"Learning and opportunity." },
{ name:"Knight of Pentacles", category:"pentacles", image:"Knight_of_Pentacles.png", description:"Reliability and persistence." },
{ name:"Queen of Pentacles", category:"pentacles", image:"Queen_of_Pentacles.png", description:"Practicality and nurturing." },
{ name:"King of Pentacles", category:"pentacles", image:"King_of_Pentacles.png", description:"Success and financial stability." },


{ name:"Ace of Swords", category:"swords", image:"Ace_of_Swords.png", description:"Clarity and breakthrough." },
{ name:"Two of Swords", category:"swords", image:"Two_of_Swords.png", description:"Decisions and stalemate." },
{ name:"Three of Swords", category:"swords", image:"Three_of_Swords.png", description:"Heartbreak and truth." },
{ name:"Four of Swords", category:"swords", image:"Four_of_Swords.png", description:"Rest and recovery." },
{ name:"Five of Swords", category:"swords", image:"Five_of_Swords.png", description:"Conflict and tension." },
{ name:"Six of Swords", category:"swords", image:"Six_of_Swords.png", description:"Transition and healing." },
{ name:"Seven of Swords", category:"swords", image:"Seven_of_Swords.png", description:"Strategy and caution." },
{ name:"Eight of Swords", category:"swords", image:"Eight_of_Swords.png", description:"Restriction and self-doubt." },
{ name:"Nine of Swords", category:"swords", image:"Nine_of_Swords.png", description:"Anxiety and worry." },
{ name:"Ten of Swords", category:"swords", image:"Ten_of_Swords.png", description:"Endings and release." },
{ name:"Page of Swords", category:"swords", image:"Page_of_Swords.png", description:"Curiosity and ideas." },
{ name:"Knight of Swords", category:"swords", image:"Knight_of_Swords.png", description:"Ambition and action." },
{ name:"Queen of Swords", category:"swords", image:"Queen_of_Swords.png", description:"Honesty and independence." },
{ name:"King of Swords", category:"swords", image:"King_of_Swords.png", description:"Logic and authority." },

{ name:"Ace of Wands", category:"wands", image:"Ace_of_Wands.png", description:"Inspiration and potential." },
{ name:"Two of Wands", category:"wands", image:"Two_of_Wands.png", description:"Planning and vision." },
{ name:"Three of Wands", category:"wands", image:"Three_of_Wands.png", description:"Expansion and progress." },
{ name:"Four of Wands", category:"wands", image:"Four_of_Wands.png", description:"Celebration and harmony." },
{ name:"Five of Wands", category:"wands", image:"Five_of_Wands.png", description:"Competition and challenge." },
{ name:"Six of Wands", category:"wands", image:"Six_of_Wands.png", description:"Recognition and success." },
{ name:"Seven of Wands", category:"wands", image:"Seven_of_Wands.png", description:"Perseverance and defense." },
{ name:"Eight of Wands", category:"wands", image:"Eight_of_Wands.png", description:"Speed and movement." },
{ name:"Nine of Wands", category:"wands", image:"Nine_of_Wands.png", description:"Resilience and persistence." },
{ name:"Ten of Wands", category:"wands", image:"Ten_of_Wands.png", description:"Responsibility and burden." },
{ name:"Page of Wands", category:"wands", image:"Page_of_Wands.png", description:"Exploration and enthusiasm." },
{ name:"Knight of Wands", category:"wands", image:"Knight_of_Wands.png", description:"Passion and adventure." },
{ name:"Queen of Wands", category:"wands", image:"Queen_of_Wands.png", description:"Confidence and charisma." },
{ name:"King of Wands", category:"wands", image:"King_of_Wands.png", description:"Leadership and vision." }

];



const grid = document.getElementById("tarotCardsGrid");

tarotCards.forEach(card=>{

    grid.innerHTML += `
    
    <article class="tarot-card">

       <img src="${tarotImagePath + card.image}" alt="${card.name}">

        <div class="tarot-card-overlay">

            <h3 class="tarot-card-name">
                ${card.name}
            </h3>

            <p class="tarot-card-desc">
                ${card.description}
            </p>

            // <a href="#" class="tarot-card-btn">
            //     Read More
            // </a>

             <a href="${cardDetailPage}?card=${card.name.replaceAll(' ','_')}" class="tarot-card-btn">
                    Read More
                   </a>

        </div>

    </article>

    `;

}); 

// Create function that displays cards.

function displayCards(cards){

    grid.innerHTML = "";

    cards.forEach(card => {

        grid.innerHTML += `
        <article class="tarot-card">

            <img src="${tarotImagePath + card.image}" alt="${card.name}">

            <div class="tarot-card-overlay">

                <h3 class="tarot-card-name">
                    ${card.name}
                </h3>

                <p class="tarot-card-desc">
                    ${card.description}
                </p>

                <a href="${cardDetailPage}?card=${card.name.replaceAll(' ','_')}" class="tarot-card-btn">
                    Read More
                   </a>

            </div>

        </article>
        `;

    });

} 

displayCards(tarotCards); 

// Make Filter Buttons Work 

// const filterButtons =
// document.querySelectorAll(".tarot-filter-btn");

filterButtons.forEach(button => {

    button.addEventListener("click", () => {

        const filter =
        button.dataset.filter;

        if(filter === "all"){

            displayCards(tarotCards);

        }else{

            const filteredCards =
            tarotCards.filter(card =>
                card.category === filter
            );

            displayCards(filteredCards);

        }

    });

});  

// Make Search Work

const searchInput =
document.getElementById("tarotSearch"); 

// searchInput.addEventListener("input", () => {

//     const searchTerm =
//     searchInput.value.toLowerCase();

//     const filteredCards =
//     tarotCards.filter(card =>

//         card.name
//         .toLowerCase()
//         .includes(searchTerm)

//     );

//     displayCards(filteredCards);

// }); 

if(searchInput){

    searchInput.addEventListener("input", () => {

        const searchTerm =
        searchInput.value.toLowerCase();

        const filteredCards =
        tarotCards.filter(card =>
            card.name
            .toLowerCase()
            .includes(searchTerm)
        );

        displayCards(filteredCards);

    });

} 