// hide/show hamburger menu

const navigationMenu = document.querySelector("#primary-navigation");
const navToggle = document.querySelector(".nav-toggle");

navToggle.addEventListener("click", () => {
    const navVisible = navigationMenu.getAttribute("data-visible");
    if (navVisible === "false") {
        navigationMenu.setAttribute("data-visible", true);
        navToggle.setAttribute("aria-expanded", true);
    } else {
        navigationMenu.setAttribute("data-visible", false);
        navToggle.setAttribute("aria-expanded", false);
    }
});