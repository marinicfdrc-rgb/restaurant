document.addEventListener("DOMContentLoaded", () => {
  const heroSection = document.getElementById("accueil");

  if (!heroSection) {
    return;
  }

  const bgDesktop = document.getElementById("hero-bg-desktop");
  const bgMobile = document.getElementById("hero-bg-mobile");
  const slogan = document.getElementById("hero-slogan");
  const description = document.getElementById("hero-description");
  const pills = document.getElementById("hero-pills");
  const buttons = document.getElementById("hero-buttons");
  const image = document.getElementById("hero-image");

  // Background: slide from top to bottom
  [bgDesktop, bgMobile].forEach((bg) => {
    if (bg) {
      bg.style.transform = "translateY(-100%)";
      bg.style.opacity = "0";
      bg.style.transition = "transform 1.2s ease-out, opacity 1.2s ease-out";

      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          bg.style.transform = "translateY(0)";
          bg.style.opacity = "1";
        });
      });
    }
  });

  // Helper: slide element in from left
  function slideInFromLeft(el, delay) {
    if (!el) {
      return;
    }

    el.style.opacity = "0";
    el.style.transform = "translateX(-60px)";
    el.style.transition = "opacity 0.8s ease-out, transform 0.8s ease-out";

    setTimeout(() => {
      el.style.opacity = "1";
      el.style.transform = "translateX(0)";
    }, delay);
  }

  // Helper: slide element in from right
  function slideInFromRight(el, delay) {
    if (!el) {
      return;
    }

    el.style.opacity = "0";
    el.style.transform = "translateX(60px)";
    el.style.transition = "opacity 0.8s ease-out, transform 0.8s ease-out";

    setTimeout(() => {
      el.style.opacity = "1";
      el.style.transform = "translateX(0)";
    }, delay);
  }

  // Text elements: enter from left one by one
  slideInFromLeft(slogan, 1200);
  slideInFromLeft(description, 1600);
  slideInFromLeft(pills, 2000);
  slideInFromLeft(buttons, 2400);

  // Image: enter from right
  slideInFromRight(image, 1200);
});