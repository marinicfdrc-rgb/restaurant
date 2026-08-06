<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Restaurant
    </title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/chefs.css') ?>">

</head>


<body class="bg-(--background) text-(--foreground)">


    <header class="fixed top-0 left-0 w-full z-50">

        <nav class="flex items-center justify-between px-4 py-2 
                bg-(--card)/90 backdrop-blur-md
                border-b border-(--border)">

            <!-- Logo -->

            <a href="#accueil" class="text-2xl font-bold flex items-center justify-left gap-4 text-(--primary)">
                <img src="<?= base_url('uploads/ratatouille.webp') ?>" alt="Logo Restaurant" class="h-10 w-10">
                La Ratatouille
            </a>

            <!-- Navigation (desktop) -->

            <div class="hidden md:flex gap-8">

                <a href="#menu" class="hover:text-(--primary) transition">
                    Menu
                </a>

                <button class="open-modal hover:text-(--primary) transition" data-modal="reservation-modal">
                    Réservation
                </button>

                <a href="#chefs" class="hover:text-(--primary) transition">
                    Chefs
                </a>

                <a href="#footer-contact" class="hover:text-(--primary) transition">
                    Contact
                </a>

            </div>

            <!-- Authentication buttons (desktop) -->

            <div id="guest-buttons" class="hidden md:flex gap-3">

                <button id="open-login" class="px-4 py-2 rounded-lg border border-(--primary)">
                    Connexion
                </button>

                <button id="open-signup" class="px-4 py-2 rounded-lg bg-(--primary) text-white">
                    Inscription
                </button>

            </div>

            <!-- User menu (desktop) -->

            <div id="user-menu-container" class="hidden md:block relative">

                <button id="user-icon" type="button" class="rounded-full bg-(--primary) p-3 text-white">
                    👤
                </button>

                <div id="user-popup"
                    class="absolute right-0 mt-3 hidden w-64 rounded-xl bg-(--card) p-5 shadow-xl border border-(--border)">

                    <div class="mb-4">
                        <p id="user-name" class="font-bold"></p>
                        <p id="user-email" class="text-sm opacity-70"></p>
                    </div>

                    <a href="#account" class="block rounded-lg px-3 py-2 hover:bg-(--background)">
                        Mes réservations
                    </a>

                    <button id="logout-button" type="button" class="mt-3 w-full rounded-lg bg-red-500 py-2 text-white">
                        Déconnexion
                    </button>

                </div>

            </div>

            <!-- Mobile hamburger menu button -->
            <button id="mobile-menu-toggle" type="button"
                class="md:hidden rounded-lg p-2 hover:bg-(--background) transition" aria-label="Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </nav>

        <!-- Mobile menu (hidden by default) -->
        <div id="mobile-menu"
            class="hidden md:hidden bg-(--card)/95 backdrop-blur-md border-b border-(--border) px-8 py-6">
            <div class="flex flex-col gap-4">

                <a href="#menu" class="hover:text-(--primary) transition py-2">
                    Menu
                </a>

                <button class="open-modal hover:text-(--primary) transition py-2 text-left"
                    data-modal="reservation-modal">
                    Réservation
                </button>

                <a href="#chefs" class="hover:text-(--primary) transition py-2">
                    Chefs
                </a>

                <a href="#footer-contact" class="hover:text-(--primary) transition py-2">
                    Contact
                </a>

                <div class="border-t border-(--border) pt-4 mt-2 flex flex-col gap-3">

                    <!-- Guest buttons in mobile menu -->
                    <div id="mobile-guest-buttons" class="flex flex-col gap-3">
                        <button id="mobile-open-login" class="px-4 py-2 rounded-lg border border-(--primary) w-full">
                            Connexion
                        </button>

                        <button id="mobile-open-signup" class="px-4 py-2 rounded-lg bg-(--primary) text-white w-full">
                            Inscription
                        </button>
                    </div>

                    <!-- User menu in mobile -->
                    <div id="mobile-user-menu" class="hidden flex-col gap-3">
                        <p id="mobile-user-name" class="font-bold"></p>
                        <p id="mobile-user-email" class="text-sm opacity-70"></p>
                        <a href="#account" class="rounded-lg px-3 py-2 hover:bg-(--background)">
                            Mes réservations
                        </a>
                        <button id="mobile-logout-button" type="button"
                            class="w-full rounded-lg bg-red-500 py-2 text-white">
                            Déconnexion
                        </button>
                    </div>

                </div>

            </div>
        </div>

    </header>