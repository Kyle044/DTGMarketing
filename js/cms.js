const sectionOne = document.querySelector(".section1");
const section = document.querySelectorAll("section");

const faders = document.querySelectorAll(".fade-in");
const options = {
  root: null,
  threshold: 0.25,
  rootMargin: "0px"
};
const sideBtn = document.querySelectorAll(".sideBtn");



const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("appear");
    }
  });
}, options);

faders.forEach((fader) => {
  appearOnScroll.observe(fader);
});

//Buttons
var dashBtn = document.getElementById("dashBtn");
var serviceBtn = document.getElementById("serviceBtn");
var careerBtn = document.getElementById("careerBtn");
var BaBtn = document.getElementById("BaBtn");
var galleryBtn = document.getElementById("galleryBtn");

//Cards
var dashCard = document.getElementById("regCard");
var serviceCard = document.getElementById("servCard");
var careerCard = document.getElementById("careerSide");
var blogCard = document.getElementById("BlogsArticleSide");
var galleryCard = document.getElementById("GallerySide");


dashCard.style.display = "block";
serviceCard.style.display ="none";
careerCard.style.display ="none";
blogCard.style.display = "none";
galleryCard.style.display = "none";

dashBtn.addEventListener("click", () => {
  SideBarButton(dashCard,serviceCard,careerCard,blogCard,galleryCard) 
});

serviceBtn.addEventListener("click", () => {
  SideBarButton(serviceCard,dashCard,careerCard,blogCard,galleryCard)  
});


careerBtn.addEventListener("click", () => {
  SideBarButton(careerCard,dashCard,serviceCard,blogCard,galleryCard)  
});

BaBtn.addEventListener("click", () => {
  SideBarButton(blogCard,dashCard,serviceCard,careerCard,galleryCard)  
});

galleryBtn.addEventListener("click", () => {
  SideBarButton(galleryCard,dashCard,serviceCard,careerCard,blogCard,)  
});


function SideBarButton (opencard, closecard2,closecard3,closecard4,closecard5) {
  
    this.opencard = opencard;    
    this.closecard2 = closecard2;
    this.closecard3 = closecard3;
    this.closecard4 = closecard4;
    this.closecard4 = closecard5;
   if (opencard.style.display === "none") {
    opencard.style.display = "block";    
    closecard2.style.display = "none";
    closecard3.style.display = "none";
    closecard4.style.display = "none";
    closecard5.style.display = "none"
   
  } else {
    // opencard.style.display = "none";
    
  }
}