const shrink_btn = document.querySelector(".shrink-btn");
const search = document.querySelector(".search");
const sidebar_links = document.querySelectorAll(".sidebar-links a");
const active_tab = document.querySelector(".active-tab");
const shortcuts = document.querySelector(".sidebar-links h4");
const tooltip_elements = document.querySelectorAll(".tooltip-element");

let activeIndex;

shrink_btn.addEventListener("click", () => {
  document.body.classList.toggle("shrink");
  setTimeout(moveActiveTab, 400);

  shrink_btn.classList.add("hovered");

  setTimeout(() => {
    shrink_btn.classList.remove("hovered");
  }, 500);
});

function moveActiveTab() {
  let topPosition = activeIndex * 58 + 2.5;

  if (activeIndex > 4) {
    topPosition += shortcuts.clientHeight;
  }

  active_tab.style.top = `${topPosition}px`;
}

function changeLink() {
  sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
  this.classList.add("active");

  activeIndex = this.dataset.active;

  moveActiveTab();
}

sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

function showTooltip() {
  let tooltip = this.parentNode.lastElementChild;
  let spans = tooltip.children;
  let tooltipIndex = this.dataset.tooltip;

  Array.from(spans).forEach((sp) => sp.classList.remove("show"));
  spans[tooltipIndex].classList.add("show");

  tooltip.style.top = `${(100 / (spans.length * 2)) * (tooltipIndex * 2 + 1)}%`;
}

tooltip_elements.forEach((elem) => {
  elem.addEventListener("mouseover", showTooltip);
});


//Buttons
var dashBtn = document.getElementById("dashBtn");
var serviceBtn = document.getElementById("serviceBtn");
var careerBtn = document.getElementById("careerBtn");
var BaBtn = document.getElementById("BaBtn");
var galleryBtn = document.getElementById("galleryBtn");

//Cards
var dashCard = document.getElementById("regCard");
var serviceCard = document.getElementById("serviceCard");
var careerCard = document.getElementById("careerCard");
var blogCard = document.getElementById("blogCard");
var galleryCard = document.getElementById("galleryCard");
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
 SideBarButton(galleryCard,dashCard,serviceCard,careerCard,blogCard)  
  
});


function SideBarButton (opencard, closecard2,closecard3,closecard4,closecard5) 
{  
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
//JS OLD KO
// const sectionOne = document.querySelector(".section1");
// const section = document.querySelectorAll("section");

// const faders = document.querySelectorAll(".fade-in");
// const options = {
//   root: null,
//   threshold: 0.25,
//   rootMargin: "0px"
// };
// const sideBtn = document.querySelectorAll(".sideBtn");



// const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
//   entries.forEach((entry) => {
//     if (!entry.isIntersecting) {
//       return;
//     } else {
//       entry.target.classList.add("appear");
//     }
//   });
// }, options);

// faders.forEach((fader) => {
//   appearOnScroll.observe(fader);
// });

// var dashBtn = document.getElementById("dashBtn");
// var serviceBtn = document.getElementById("serviceBtn");
// var careerBtn = document.getElementById("careerBtn");
// var BaBtn = document.getElementById("BaBtn");
// var galleryBtn = document.getElementById("galleryBtn");

// var dashCard = document.getElementById("regCard");
// var serviceCard = document.getElementById("serviceCard");
// var careerCard = document.getElementById("careerCard");
// var blogCard = document.getElementById("blogCard");
// var galleryCard = document.getElementById("galleryCard");

// dashCard.style.display = "block";
// serviceCard.style.display ="none";
// careerCard.style.display ="none";
// blogCard.style.display = "none";
// galleryCard.style.display = "none";

// dashBtn.addEventListener("click", () => {
//   SideBarButton(dashCard,serviceCard,careerCard,blogCard,galleryCard)  
// });
// serviceBtn.addEventListener("click", () => {
//  SideBarButton(serviceCard,dashCard,careerCard,blogCard,galleryCard)   
// });
// careerBtn.addEventListener("click", () => {
//  SideBarButton(careerCard,dashCard,serviceCard,blogCard,galleryCard)   
// });
// BaBtn.addEventListener("click", () => {
//   SideBarButton(blogCard,dashCard,serviceCard,careerCard,galleryCard)  
// });
// galleryBtn.addEventListener("click", () => {
//  SideBarButton(galleryCard,dashCard,serviceCard,careerCard,blogCard)  
// });
// function SideBarButton (opencard, closecard2,closecard3,closecard4,closecard5) 
// {  
//     this.opencard = opencard;    
//     this.closecard2 = closecard2;
//     this.closecard3 = closecard3;
//     this.closecard4 = closecard4;
//     this.closecard4 = closecard5;
//    if (opencard.style.display === "none") {
//     opencard.style.display = "block";    
//     closecard2.style.display = "none";
//     closecard3.style.display = "none";
//     closecard4.style.display = "none";
//     closecard5.style.display = "none"
   
//   } else {
    
//   }
// }


