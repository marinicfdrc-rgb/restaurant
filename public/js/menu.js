const buttons = document.querySelectorAll(".menu-filter");
const items = document.querySelectorAll(".menu-item");

buttons.forEach(button => {

    button.addEventListener("click", () => {

        buttons.forEach(btn => {

            btn.classList.remove("bg-(--primary)", "text-white");

        });

        button.classList.add("bg-(--primary)", "text-white");

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