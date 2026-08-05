document.addEventListener("DOMContentLoaded", () => {

    const toggleButton = document.getElementById("mobile-menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    if (!toggleButton || !mobileMenu) {
        return;
    }

    toggleButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });

    // Close mobile menu when clicking a link inside it
    mobileMenu.querySelectorAll("a, button").forEach((el) => {
        el.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
        });
    });

});