document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("theme-toggle");
    const body = document.body;

    if (localStorage.getItem("theme") === "dark") {
        body.classList.add("dark-mode");
        themeToggle.textContent = "☀️ Mod Luminos";
    }

    themeToggle.addEventListener("click", function () {
        body.classList.toggle("dark-mode");

        if (body.classList.contains("dark-mode")) {
            localStorage.setItem("theme", "dark");
            themeToggle.textContent = "☀️ Mod Luminos";
        } else {
            localStorage.setItem("theme", "light");
            themeToggle.textContent = "🌙 Mod Întunecat";
        }
    });
});
window.onscroll = function() {stickyMenu()};

const menu = document.querySelector("nav");
const sticky = menu.offsetTop;

function stickyMenu() {
    if (window.pageYOffset > sticky) {
        menu.classList.add("sticky");
    } else {
        menu.classList.remove("sticky");
    }
}
// Script pentru slider
let currentIndex = 0; // Indexul imaginii curente
const images = document.querySelectorAll('.image-slider-container img'); // Selectăm toate imaginile din slider
const totalImages = images.length; // Obținem numărul total de imagini

// Funcția pentru schimbarea imaginii
function changeImage() {
    // Calculăm poziția următoarei imagini
    currentIndex++;
    if (currentIndex >= totalImages) {
        currentIndex = 0; // Dacă am ajuns la ultima imagine, revenim la prima
    }

    // Mergem la următoarea imagine
    document.querySelector('.image-slider-container').style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Setăm un interval de 3 secunde pentru a schimba imaginea
setInterval(changeImage, 3000);


