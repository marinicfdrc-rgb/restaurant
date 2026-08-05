let currentUser = null;

async function refreshAuthState() {
  const response = await fetch("/session");

  const data = await response.json();

  currentUser = data.logged_in ? data : null;

  updateHeader();

  if (window.unlockReservation) {
    window.unlockReservation();
  }
}

function updateHeader() {
  const guestButtons = document.getElementById("guest-buttons");

  const userMenu = document.getElementById("user-menu-container");

  const email = document.getElementById("user-email");

  const mobileGuestButtons = document.getElementById("mobile-guest-buttons");

  const mobileUserMenu = document.getElementById("mobile-user-menu");

  if (!guestButtons || !userMenu) {
    return;
  }

  if (currentUser) {
    guestButtons.style.display = "none";

    userMenu.style.display = "";

    document.getElementById("user-name").textContent = currentUser.name;

    document.getElementById("user-email").textContent = currentUser.email;

    // Mobile menu state
    if (mobileGuestButtons) {
      mobileGuestButtons.classList.add("hidden");
    }

    if (mobileUserMenu) {
      mobileUserMenu.classList.remove("hidden");
      mobileUserMenu.classList.add("flex");

      document.getElementById("mobile-user-name").textContent =
        currentUser.name;

      document.getElementById("mobile-user-email").textContent =
        currentUser.email;
    }
  } else {
    guestButtons.style.display = "";

    userMenu.style.display = "none";

    // Mobile menu state
    if (mobileGuestButtons) {
      mobileGuestButtons.classList.remove("hidden");
    }

    if (mobileUserMenu) {
      mobileUserMenu.classList.add("hidden");
      mobileUserMenu.classList.remove("flex");
    }
  }
}

window.refreshAuthState = refreshAuthState;

document.addEventListener("DOMContentLoaded", refreshAuthState);

document.getElementById("user-icon")?.addEventListener("click", () => {
  document.getElementById("user-popup").classList.toggle("hidden");
});

document.addEventListener("click", (e) => {
  const container = document.getElementById("user-menu-container");

  if (container && !container.contains(e.target)) {
    document.getElementById("user-popup")?.classList.add("hidden");
  }
});
