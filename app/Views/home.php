<?php
/**
 * @var array $menu List of menu items passed from the Home controller.
 */
?>

<?= $this->extend('layouts/main') ?>


<?= $this->section('content') ?>


<!-- HERO -->

<section id="accueil" class="relative h-screen flex items-start justify-center overflow-hidden">

    <!-- Desktop background image (hidden on mobile) -->
    <div id="hero-bg-desktop" class="absolute inset-0 bg-cover bg-center max-md:hidden"
        style="background-image: url('<?= base_url('uploads/DSCF6257-scaled.webp') ?>');"></div>

    <!-- Mobile background image (hidden on desktop) -->
    <div id="hero-bg-mobile" class="absolute inset-0 bg-cover bg-center md:hidden blur-sm"
        style="background-image: url('<?= base_url('uploads/menu/ratatouille.webp') ?>');"></div>

    <!-- Linear gradient overlay -->
    <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));">
    </div>

    <!-- Content -->
    <div class="relative z-10 h-full w-full max-w-6xl px-8 pt-24 pb-24">

        <div class="grid h-full md:grid-cols-2 gap-10 items-stretch">

            <!-- Text column -->
            <div class="flex flex-col justify-start">

                <h1 id="typewriter-title" class="text-6xl font-bold text-white">
                    <span class="typewriter-cursor"
                        style="display: inline-block; width: 4px; margin-left: 4px; background-color: #fff;"></span>
                </h1>

                <p id="hero-slogan" class="mt-4 text-2xl font-semibold text-(--primary)">
                    Cuisine Française Authentique
                </p>

                <p id="hero-description" class="mt-6 text-lg leading-relaxed text-justify text-gray-100">
                    Plongez dans une expérience culinaire inoubliable où chaque plat
                    raconte une histoire. Nos chefs passionnés sélectionnent les
                    meilleurs produits frais du marché pour vous offrir le meilleur
                    de la gastronomie française, dans une ambiance chaleureuse et
                    conviviale.
                </p>

                <div id="hero-pills" class="mt-8 flex flex-wrap gap-3">

                    <span
                        class="rounded-full bg-white/10 px-5 py-2 text-sm font-medium text-white backdrop-blur-md border border-white/20">
                        🌿 Ingrédients frais
                    </span>

                    <span
                        class="rounded-full bg-white/10 px-5 py-2 text-sm font-medium text-white backdrop-blur-md border border-white/20">
                        👨‍🍳 Recettes traditionnelles
                    </span>

                    <span
                        class="rounded-full bg-white/10 px-5 py-2 text-sm font-medium text-white backdrop-blur-md border border-white/20">
                        🕯️ Ambiance chaleureuse
                    </span>

                </div>

                <div id="hero-buttons" class="mt-10 flex flex-wrap gap-4">

                    <a href="#menu" class="group relative overflow-hidden rounded-lg bg-blue-500 hover:bg-blue-600
                              px-8 py-4 text-lg font-semibold text-white transition">
                        <span class="relative z-10">🍽 Voir le Menu</span>
                        <span class="light-ray"></span>
                    </a>

                    <button class="open-modal group relative overflow-hidden rounded-lg border-2 border-white
                               hover:bg-white/10
                               px-8 py-4 text-lg font-semibold text-white transition" data-modal="reservation-modal">
                        <span class="relative z-10">📅 Réserver une Table</span>
                        <span class="light-ray"></span>
                    </button>

                </div>

            </div>

            <!-- Image column (hidden on mobile) -->
            <div id="hero-image" class="group max-md:hidden overflow-hidden rounded-2xl">
                <img src="<?= base_url('uploads/menu/ratatouille.webp') ?>"
                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                    alt="Crème Brûlée">
            </div>

        </div>

    </div>

</section>


<!-- MENU -->

<section id="menu" class="px-8 py-20">


    <h2 class="mb-10 text-center text-4xl font-bold">
        Notre Menu
    </h2>



    <!-- FILTER BUTTONS (sticky below navbar) -->

    <div
        class="sticky top-14 z-40 mb-10 flex flex-wrap justify-center gap-4 bg-(--background)/95 backdrop-blur-md rounded-lg py-3 px-4">


        <button data-category="all" class="menu-filter rounded-full
                   bg-blue-500
                   px-5 py-2 text-white">
            Tous
        </button>


        <button data-category="entree" class="menu-filter rounded-full border px-5 py-2">
            Entrées
        </button>


        <button data-category="plat" class="menu-filter rounded-full border px-5 py-2">
            Plats
        </button>


        <button data-category="soupe" class="menu-filter rounded-full border px-5 py-2">
            Soupes
        </button>


        <button data-category="dessert" class="menu-filter rounded-full border px-5 py-2">
            Desserts
        </button>


        <button data-category="boisson" class="menu-filter rounded-full border px-5 py-2">
            Boissons
        </button>


    </div>




    <!-- MENU CARDS -->

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">


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


<!-- CHEFS -->

<section id="chefs" class="px-8 py-20">

    <h2 class="mb-4 text-center text-4xl font-bold">
        Nos Chefs
    </h2>

    <p class="mb-16 text-center text-lg text-gray-600">
        Les artisans passionnés derrière chaque assiette
    </p>

    <!-- 3D Cube Container -->
    <div class="chefs-cube-container mx-auto max-w-5xl">

        <div id="chefs-cube" class="chefs-cube">

            <!-- Chef 1 -->
            <div class="chef-face">
                <div class="chef-profile">
                    <div class="chef-image-wrap">
                        <img src="<?= base_url('uploads/chefs/cook1.webp') ?>" alt="Chef Antoine Martin"
                            class="chef-image">
                    </div>
                    <div class="chef-card">
                        <div class="chef-info">
                            <h3 class="chef-name">Antoine Martin</h3>
                            <p class="chef-role">Chef Exécutif</p>
                            <div class="chef-stats">
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Âge</span>
                                    <span class="chef-stat-value">42 ans</span>
                                </div>
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Expérience</span>
                                    <span class="chef-stat-value">20 ans</span>
                                </div>
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Étoiles Michelin</span>
                                    <span class="chef-stat-value">⭐⭐⭐</span>
                                </div>
                            </div>
                            <div class="chef-skill">
                                <span class="chef-stat-label">Spécialité</span>
                                <span class="chef-skill-value">Gastronomie Provençale</span>
                            </div>
                            <div class="chef-recipe">
                                <span class="chef-stat-label">Meilleure Recette</span>
                                <span class="chef-recipe-value">Bœuf Bourguignon</span>
                            </div>
                            <p class="chef-desc">
                                Maître de la cuisine française moderne. Chaque plat est une
                                œuvre d'art qui célèbre les saveurs authentiques de la Provence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chef 2 -->
            <div class="chef-face">
                <div class="chef-profile">
                    <div class="chef-image-wrap">
                        <img src="<?= base_url('uploads/chefs/cook2.webp') ?>" alt="Chef Sophie Dubois"
                            class="chef-image">
                    </div>
                    <div class="chef-card">
                        <div class="chef-info">
                            <h3 class="chef-name">Sophie Dubois</h3>
                            <p class="chef-role">Chef Pâtissière</p>
                            <div class="chef-stats">
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Âge</span>
                                    <span class="chef-stat-value">35 ans</span>
                                </div>
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Expérience</span>
                                    <span class="chef-stat-value">12 ans</span>
                                </div>
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Étoiles Michelin</span>
                                    <span class="chef-stat-value">⭐⭐</span>
                                </div>
                            </div>
                            <div class="chef-skill">
                                <span class="chef-stat-label">Spécialité</span>
                                <span class="chef-skill-value">Pâtisserie Fine</span>
                            </div>
                            <div class="chef-recipe">
                                <span class="chef-stat-label">Meilleure Recette</span>
                                <span class="chef-recipe-value">Crème Brûlée</span>
                            </div>
                            <p class="chef-desc">
                                Passionnée de desserts depuis son plus jeune âge.
                                Crée des pâtisseries raffinées qui allient tradition et créativité.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chef 3 -->
            <div class="chef-face">
                <div class="chef-profile">
                    <div class="chef-image-wrap">
                        <img src="<?= base_url('uploads/chefs/cook3.webp') ?>" alt="Chef Jean-Pierre Lefèvre"
                            class="chef-image">
                    </div>
                    <div class="chef-card">
                        <div class="chef-info">
                            <h3 class="chef-name">Jean-Pierre Lefèvre</h3>
                            <p class="chef-role">Chef de Cuisine</p>
                            <div class="chef-stats">
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Âge</span>
                                    <span class="chef-stat-value">48 ans</span>
                                </div>
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Expérience</span>
                                    <span class="chef-stat-value">25 ans</span>
                                </div>
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Étoiles Michelin</span>
                                    <span class="chef-stat-value">⭐⭐⭐⭐</span>
                                </div>
                            </div>
                            <div class="chef-skill">
                                <span class="chef-stat-label">Spécialité</span>
                                <span class="chef-skill-value">Sauces & Mijotés</span>
                            </div>
                            <div class="chef-recipe">
                                <span class="chef-stat-label">Meilleure Recette</span>
                                <span class="chef-recipe-value">Soupe à l'Oignon</span>
                            </div>
                            <p class="chef-desc">
                                Expert en sauces et mijotés traditionnels français.
                                Chaque plat est une invitation au voyage culinaire.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chef 4 -->
            <div class="chef-face">
                <div class="chef-profile">
                    <div class="chef-image-wrap">
                        <img src="<?= base_url('uploads/chefs/cook4.webp') ?>" alt="Chef Marie Laurent"
                            class="chef-image">
                    </div>
                    <div class="chef-card">
                        <div class="chef-info">
                            <h3 class="chef-name">Marie Laurent</h3>
                            <p class="chef-role">Sous-Chef</p>
                            <div class="chef-stats">
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Âge</span>
                                    <span class="chef-stat-value">29 ans</span>
                                </div>
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Expérience</span>
                                    <span class="chef-stat-value">8 ans</span>
                                </div>
                                <div class="chef-stat">
                                    <span class="chef-stat-label">Étoiles Michelin</span>
                                    <span class="chef-stat-value">⭐</span>
                                </div>
                            </div>
                            <div class="chef-skill">
                                <span class="chef-stat-label">Spécialité</span>
                                <span class="chef-skill-value">Cuisine de Saison</span>
                            </div>
                            <div class="chef-recipe">
                                <span class="chef-stat-label">Meilleure Recette</span>
                                <span class="chef-recipe-value">Ratatouille</span>
                            </div>
                            <p class="chef-desc">
                                Touche féminine et élégance dans chaque assiette.
                                Passionnée par les produits frais et les recettes de saison.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<section id="account" class="hidden px-8 py-20">

    <h2 class="text-4xl font-bold">
        Mon compte
    </h2>


</section>

<?= view('components/login_modal') ?>

<?= view('components/signup_modal') ?>

<?= $this->endSection() ?>