let reservationMenus = [];

let currentCategory = "all";

async function loadReservationMenu() {
  const container = document.getElementById("menu-selector");

  if (!container) {
    return;
  }

  const response = await fetch("/reservation/menu");

  reservationMenus = await response.json();

  renderMenuSelector();
}

function renderMenuSelector() {
  const container = document.getElementById("menu-selector");

  if (!container) {
    return;
  }

  const search =
    document.getElementById("menu-search")?.value.toLowerCase() ?? "";

  container.innerHTML = "";

  reservationMenus

    .filter((menu) => {
      const matchCategory =
        currentCategory === "all" || menu.type === currentCategory;

      const matchSearch = menu.name.toLowerCase().includes(search);

      return matchCategory && matchSearch;
    })

    .forEach((menu) => {
      container.innerHTML += `


        <div
        class="mb-4 rounded-xl border p-4"
        >


            <div
            class="flex justify-between"
            >


                <div>

                    <h3 class="font-bold">
                        ${menu.name}
                    </h3>


                    <p class="text-sm">
                        ${menu.description ?? ""}
                    </p>


                </div>



                <div>

                    <span>
                        ${menu.discount_price ?? menu.price} €
                    </span>


                </div>


            </div>



            <button
            
                type="button"

                class="mt-3 w-full rounded-lg
                       bg-(--primary)
                       py-2 text-white"

                onclick='addToCart(
                    ${JSON.stringify(menu)}
                )'

            >

                Ajouter

            </button>


        </div>


        `;
    });
}

document.addEventListener("DOMContentLoaded", () => {
  loadReservationMenu();

  document.getElementById("menu-search")?.addEventListener("input", () => {
    renderMenuSelector();
  });

  document.querySelectorAll(".menu-category").forEach((button) => {
    button.addEventListener("click", () => {
      currentCategory = button.dataset.category ?? "all";

      renderMenuSelector();
    });
  });
});
