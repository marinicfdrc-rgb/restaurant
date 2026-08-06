const buttons = document.querySelectorAll(".menu-filter");
const items = document.querySelectorAll(".menu-item");

buttons.forEach(button => {

    button.addEventListener("click", () => {

        buttons.forEach(btn => {

            btn.classList.remove("bg-blue-500", "text-white");

            if (!btn.classList.contains("bg-blue-500")) {

                btn.classList.add("border");

            }

        });

        button.classList.remove("border");

        button.classList.add("bg-blue-500", "text-white");

        const category = button.dataset.category;

        items.forEach(item => {

            const type = item.dataset.type.toLowerCase();

            if (category === "all" || type === category) {

                item.classList.remove("hidden");

            } else {

                item.classList.add("hidden");

            }

        });

    });

});