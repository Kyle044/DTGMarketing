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
var dashCard = document.getElementById("dashSide");
var serviceCard = document.getElementById("serviceSide");
var careerCard = document.getElementById("careerSide");
var blogCard = document.getElementById("BlogsArticleSide");
var galleryCard = document.getElementById("GallerySide");

dashBtn.addEventListener("click", () => {
  dashCard.style.transform = "translateX(0vw)";
  serviceCard.style.transform = "translateX(100vw)";
  careerCard.style.transform = "translateX(100vw)";
  blogCard.style.transform = "translateX(100vw)";
  galleryCard.style.transform = "translateX(100vw)";
});

serviceBtn.addEventListener("click", () => {
  dashCard.style.transform = "translateX(100vw)";
  serviceCard.style.transform = "translateX(0vw)";
  careerCard.style.transform = "translateX(100vw)";
  blogCard.style.transform = "translateX(100vw)";
  galleryCard.style.transform = "translateX(100vw)";
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
