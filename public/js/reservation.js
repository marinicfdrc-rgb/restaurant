async function unlockReservation() {
  const response = await fetch("/session");
  const data = await response.json();

  const warning = document.getElementById("reservation-lock");

  const form = document.getElementById("reservation-form");

  if (!warning || !form) {
    return;
  }

  const fields = form.querySelectorAll("input, textarea, select, button");

  if (data.logged_in) {
    warning.classList.add("hidden");

    fields.forEach((field) => {
      field.disabled = false;
    });
  } else {
    warning.classList.remove("hidden");

    fields.forEach((field) => {
      field.disabled = true;
    });
  }
}

window.unlockReservation = unlockReservation;

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("reservation-form");

  console.log("reservation loaded");

  form?.addEventListener("submit", async (e) => {
    console.log("reservation submitted");

    e.preventDefault();

    const cart = getCart();

    if (cart.length === 0) {
      alert("Veuillez ajouter au moins un plat.");

      return;
    }

    const items = cart.map((item) => ({
      menu_item_id: item.id,

      quantity: item.quantity,
    }));

    console.log({
      date: document.getElementById("reservation-date").value,

      time: document.getElementById("reservation-time").value,

      people: document.getElementById("reservation-people").value,

      name: document.getElementById("client-name").value,

      phone: document.getElementById("client-phone").value,

      cart: getCart(),
    });

    const response = await fetch("/reservation/create", {
      method: "POST",

      headers: {
        "Content-Type": "application/json",
      },

      body: JSON.stringify({
        reservation_date: document.getElementById("reservation-date").value,

        reservation_time: document.getElementById("reservation-time").value,

        number_of_people: document.getElementById("reservation-people").value,

        client_name: document.getElementById("client-name").value,

        client_phone: document.getElementById("client-phone").value,

        items: items,
      }),
    });

    const data = await response.json();

    alert(data.message);

    if (data.success) {
      form.reset();

      // empty cart after success

      reservationCart = [];

      clearCart();
    }
  });
});
