<?php
/**
 * @var array $menu List of menu items passed from the Home controller.
 */
?>

<?= $this->extend('layouts/main') ?>


<?= $this->section('content') ?>


<!-- HERO -->

<section
    id="accueil"
    class="relative min-h-screen flex items-center justify-center overflow-hidden"
>

    <!-- Desktop background image (hidden on mobile) -->
    <div
        class="absolute inset-0 bg-cover bg-center max-md:hidden"
        style="background-image: url('<?= base_url('uploads/DSCF6257-scaled.webp') ?>');"
    ></div>

    <!-- Mobile background image (hidden on desktop) -->
    <div
        class="absolute inset-0 bg-cover bg-center md:hidden blur-sm"
        style="background-image: url('<?= base_url('uploads/menu/creme-brulee.webp') ?>');"
    ></div>

    <!-- Linear gradient overlay -->
    <div
        class="absolute inset-0"
        style="background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));"
    ></div>

    <!-- Content -->
    <div class="relative z-10 w-full max-w-5xl px-8 py-24">

        <div class="grid md:grid-cols-2 gap-10 items-stretch">

            <!-- Text column -->
            <div>

                <h1 class="text-5xl font-bold text-white">
                    Bienvenue dans chez La Ratatouille, où la cuisine française prend vie.
                </h1>

                <p class="mt-5 text-gray-100">
                    Une cuisine française authentique préparée
                    avec passion.
                </p>

                <p class="mt-5 text-gray-100">
                    Découvrez notre menu varié et préparez-vous à vivre une expérience culinaire inoubliable.
                </p>

                <p class="mt-5 text-gray-100">
                    Qualité, fraîcheur et saveurs sont au rendez-vous pour ravir vos papilles.
                </p>

                <h2 class="mt-10 text-3xl font-bold text-white">
                    Adresse: 123 Rue de la Gastronomie, Paris, France
                </h2>

                <p class="mt-5 text-gray-100">
                    Réservez votre table dès maintenant.
                </p>

                <button
                    class="open-modal mt-8 rounded-lg
                           bg-blue-500 hover:bg-blue-600 
                           px-6 py-3 text-white"
                    data-modal="reservation-modal"
                >
                    Réserver une table
                </button>

            </div>

            <!-- Image column (hidden on mobile) -->
            <div class="max-md:hidden h-full">
                <img
                    src="<?= base_url('uploads/menu/glace-vanille.webp') ?>"
                    class="rounded-2xl w-full h-full object-cover"
                    alt="Crème Brûlée"
                >
            </div>

        </div>

    </div>

</section>



<!-- MENU -->

<section
    id="menu"
    class="px-8 py-20"
>


    <h2 class="mb-10 text-center text-4xl font-bold">
        Notre Menu
    </h2>



    <!-- FILTER BUTTONS (sticky below navbar) -->

    <div class="sticky top-14 z-40 mb-10 flex flex-wrap justify-center gap-4 bg-(--background)/95 backdrop-blur-md rounded-lg py-3 px-4">


        <button
            data-category="all"
            class="menu-filter rounded-full
                   bg-(--primary)
                   px-5 py-2 text-white"
        >
            Tous
        </button>


        <button
            data-category="entree"
            class="menu-filter rounded-full border px-5 py-2"
        >
            Entrées
        </button>


        <button
            data-category="plat"
            class="menu-filter rounded-full border px-5 py-2"
        >
            Plats
        </button>


        <button
            data-category="soupe"
            class="menu-filter rounded-full border px-5 py-2"
        >
            Soupes
        </button>


        <button
            data-category="dessert"
            class="menu-filter rounded-full border px-5 py-2"
        >
            Desserts
        </button>


        <button
            data-category="boisson"
            class="menu-filter rounded-full border px-5 py-2"
        >
            Boissons
        </button>


    </div>




    <!-- MENU CARDS -->

    <div
        class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
    >


        <?php foreach ($menu as $item): ?>


            <?= view(
                'components/menu_card',
                [
                    'item' => $item
                ]
            ) ?>


        <?php endforeach; ?>


    </div>


</section>


<!-- CONTACT -->

<section
id="account"
class="hidden px-8 py-20"
>

<h2 class="text-4xl font-bold">
Mon compte
</h2>


</section>

<section id="contact" class="px-8 py-20">

    <h2 class="text-4xl font-bold">
        Contact
    </h2>

</section>

<?= view('components/login_modal') ?>

<?= view('components/signup_modal') ?>

<?= $this->endSection() ?>