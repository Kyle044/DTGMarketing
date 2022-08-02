const sectionOne = document.querySelector(".section1");
const section = document.querySelectorAll("section");

const faders = document.querySelectorAll(".fade-in");
const options = {
  root: null,
  threshold: 0.25,
  rootMargin: "0px"
};

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
// serviceCard.style.visibility="hidden";
// careerCard.style.visibility ="hidden";
// blogCard.style.visibility ="hidden";
// galleryCard.style.visibility ="hidden";


dashBtn.addEventListener("click", () => {
  // dashCard.style.display = "block";
  dashCard.style.visibility = "visible";
  serviceCard.style.visibility = "hidden";
  // careerCard.style.display = "none";
  // blogCard.style.display = "none";
  // galleryCard.style.display = "none";
});

serviceBtn.addEventListener("click", () => {
  dashCard.style.visibility = "hidden";
  // serviceCard.stylee.visibility = "visible";
  // serviceCard.style.display = "block";
  // careerCard.style.display = "none";
  // blogCard.style.display = "none";
  // galleryCard.style.display = "none";
});

careerBtn.addEventListener("click", () => {
  dashCard.style.transform = "translateX(100vw)";
  serviceCard.style.transform = "translateX(100vw)";
  careerCard.style.transform = "translateX(0vw)";
  blogCard.style.transform = "translateX(100vw)";
  galleryCard.style.transform = "translateX(100vw)";
});

BaBtn.addEventListener("click", () => {
  dashCard.style.transform = "translateX(100vw)";
  serviceCard.style.transform = "translateX(100vw)";
  careerCard.style.transform = "translateX(100vw)";
  blogCard.style.transform = "translateX(0vw)";
  galleryCard.style.transform = "translateX(100vw)";
});

galleryBtn.addEventListener("click", () => {
  dashCard.style.transform = "translateX(100vw)";
  serviceCard.style.transform = "translateX(100vw)";
  careerCard.style.transform = "translateX(100vw)";
  blogCard.style.transform = "translateX(100vw)";
  galleryCard.style.transform = "translateX(0vw)";
});
