window.reservationCart = [];

function addToCart(menu) {
  const existing = reservationCart.find((item) => item.id == menu.id);

  if (existing) {
    existing.quantity++;
  } else {
    reservationCart.push({
      id: menu.id,

      name: menu.name,

      price: menu.discount_price ?? menu.price,

      quantity: 1,
    });
  }

  renderCart();
}

function removeFromCart(id) {
  reservationCart = reservationCart.filter((item) => item.id != id);

  renderCart();
}

function updateQuantity(id, value) {
  const item = reservationCart.find((item) => item.id == id);

  if (!item) {
    return;
  }

  item.quantity = Number(value);

  if (item.quantity <= 0) {
    removeFromCart(id);
    return;
  }

  renderCart();
}

function getCart() {
  return reservationCart;
}

function getTotal() {
  return reservationCart.reduce((total, item) => {
    return total + item.price * item.quantity;
  }, 0);
}

function renderCart() {
  const container = document.getElementById("reservation-cart");

  const total = document.getElementById("cart-total");

  if (!container) {
    return;
  }

  container.innerHTML = "";

  reservationCart.forEach((item) => {
    container.innerHTML += `

        <div class="mb-4 rounded-lg border p-3">


            <div class="flex justify-between">

                <span class="font-bold">
                    ${item.name}
                </span>


                <button
                    type="button"
                    onclick="removeFromCart(${item.id})"
                    class="text-red-500"
                >
                    ✕
                </button>


            </div>



            <div class="mt-3 flex items-center justify-between">


                <input

                    type="number"

                    min="1"

                    value="${item.quantity}"

                    onchange="
                    updateQuantity(
                        ${item.id},
                        this.value
                    )"

                    class="w-16 rounded border p-1"

                >



                <span>
                    ${item.price * item.quantity} €
                </span>


            </div>


        </div>

        `;
  });

  if (total) {
    total.innerHTML = getTotal() + " €";
  }
}

// KEEP THIS AT THE VERY END

window.addToCart = addToCart;

window.removeFromCart = removeFromCart;

window.updateQuantity = updateQuantity;

window.getCart = getCart;

window.clearCart = function () {
  reservationCart = [];
  renderCart();
};
