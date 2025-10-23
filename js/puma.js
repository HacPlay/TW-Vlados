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
