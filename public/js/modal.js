const loginModal = document.getElementById("login-modal");
const signupModal = document.getElementById("signup-modal");

// OPEN

document.getElementById("open-login")?.addEventListener("click", () => {
  loginModal.classList.remove("hidden");
  loginModal.classList.add("flex");
});

document.getElementById("open-signup")?.addEventListener("click", () => {
  signupModal.classList.remove("hidden");
  signupModal.classList.add("flex");
});

// Mobile menu login/signup buttons
document.getElementById("mobile-open-login")?.addEventListener("click", () => {
  loginModal.classList.remove("hidden");
  loginModal.classList.add("flex");
});

document.getElementById("mobile-open-signup")?.addEventListener("click", () => {
  signupModal.classList.remove("hidden");
  signupModal.classList.add("flex");
});

// CLOSE

document.querySelectorAll(".close-modal").forEach((button) => {
  button.addEventListener("click", () => {
    loginModal.classList.add("hidden");
    signupModal.classList.add("hidden");
  });
});

// SIGNUP

document
  .getElementById("signup-form")
  ?.addEventListener("submit", async (e) => {
    e.preventDefault();

    clearFormErrors();

    let valid = true;

    valid =
      validateField("signup-name", [
        {
          type: "required",
          message: "Nom obligatoire",
        },
        {
          type: "min",
          value: 3,
          message: "Le nom doit contenir au moins 3 caractères",
        },
      ]) && valid;

    valid =
      validateField("signup-email", [
        {
          type: "required",
          message: "Email obligatoire",
        },
        {
          type: "email",
          message: "Email invalide",
        },
      ]) && valid;

    valid =
      validateField("signup-password", [
        {
          type: "required",
          message: "Mot de passe obligatoire",
        },
        {
          type: "min",
          value: 8,
          message: "Minimum 8 caractères",
        },
      ]) && valid;

    valid =
      validateField("signup-confirm-password", [
        {
          type: "required",
          message: "Confirmation du mot de passe obligatoire",
        },
        {
          type: "match",
          value: "signup-password",
          message: "Les mots de passe ne correspondent pas",
        },
      ]) && valid;

    valid =
      validateField("signup-phone", [
        {
          type: "number",
          message: "Le téléphone doit contenir uniquement des chiffres",
        },
        {
          type: "min",
          value: 10,
          message: "Numéro trop court",
        },
      ]) && valid;

    if (!valid) {
      return;
    }

    const response = await fetch("/signup", {
      method: "POST",

      headers: {
        "Content-Type": "application/json",
      },

      body: JSON.stringify({
        name: document.getElementById("signup-name").value,

        email: document.getElementById("signup-email").value,

        phone: document.getElementById("signup-phone").value,

        password: document.getElementById("signup-password").value,
      }),
    });

    const data = await response.json();

    alert(data.message);

    if (data.success) {
      signupModal.classList.add("hidden");

      loginModal.classList.remove("hidden");
      loginModal.classList.add("flex");
    }
  });

// LOGIN

document.getElementById("login-form")?.addEventListener("submit", async (e) => {
  e.preventDefault();

  clearFormErrors();

  let valid = true;

  valid =
    validateField("login-email", [
      {
        type: "required",
        message: "Email obligatoire",
      },
      {
        type: "email",
        message: "Email invalide",
      },
    ]) && valid;

  valid =
    validateField("login-password", [
      {
        type: "required",
        message: "Mot de passe obligatoire",
      },
      {
        type: "min",
        value: 8,
        message: "Le mot de passe doit contenir au moins 8 caractères",
      },
    ]) && valid;

  if (!valid) {
    return;
  }

  const response = await fetch("/login", {
    method: "POST",

    headers: {
      "Content-Type": "application/json",
    },

    body: JSON.stringify({
      email: document.getElementById("login-email").value,

      password: document.getElementById("login-password").value,
    }),
  });

  const data = await response.json();

  console.log(data);
  alert(JSON.stringify(data));

  if (data.success) {
    loginModal.classList.add("hidden");
    document.getElementById("login-form").reset();

    await refreshAuthState();
    // update reservation

    if (window.unlockReservation) {
      window.unlockReservation();
    }
  }
});

// Password toggle
document.querySelectorAll(".password-toggle").forEach((button) => {
  button.addEventListener("click", () => {
    const target = document.getElementById(button.dataset.target);

    if (target) {
      target.type = target.type === "password" ? "text" : "password";
    }
  });
});

//reservation modal
document.querySelectorAll(".open-modal").forEach((button) => {
  button.addEventListener("click", () => {
    const modal = document.getElementById(button.dataset.modal);

    modal.classList.remove("hidden");

    modal.classList.add("flex");
  });
});

document.querySelectorAll(".close-modal").forEach((button) => {
  button.addEventListener("click", () => {
    button.closest(".fixed").classList.add("hidden");
  });
});

document
  .getElementById("logout-button")
  ?.addEventListener("click", async () => {
    await fetch("/logout", {
      method: "POST",
    });

    await refreshAuthState();
  });

document
  .getElementById("mobile-logout-button")
  ?.addEventListener("click", async () => {
    await fetch("/logout", {
      method: "POST",
    });

    await refreshAuthState();
  });
