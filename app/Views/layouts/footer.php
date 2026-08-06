<footer id="footer-contact" class="relative border-t border-(--border)">

    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('<?= base_url('uploads/DSCF6255-1-scaled.webp') ?>');"></div>

    <!-- Linear gradient overlay -->
    <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.85));">
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-8 py-12">

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            <!-- Brand & About -->
            <div class="rounded-2xl bg-white/10 p-6 backdrop-blur-md border border-white/20">

                <div class="flex items-center gap-3">

                    <img src="<?= base_url('uploads/ratatouille.webp') ?>" alt="Logo Restaurant" class="h-10 w-10">

                    <h3 class="text-xl font-bold text-white">
                        La Ratatouille
                    </h3>

                </div>

                <p class="mt-4 text-sm leading-relaxed text-white/80">
                    Une cuisine française authentique préparée avec passion.
                    Qualité, fraîcheur et saveurs au rendez-vous pour ravir vos papilles.
                </p>

            </div>


            <!-- Opening Hours -->
            <div class="rounded-2xl bg-white/10 p-6 backdrop-blur-md border border-white/20">

                <h4 class="mb-4 text-lg font-bold text-white">
                    Horaires d'ouverture
                </h4>

                <ul class="space-y-2 text-sm text-white/80">

                    <li class="flex justify-between gap-4">
                        <span>Lundi - Vendredi</span>
                        <span class="font-semibold text-white">11h30 - 22h00</span>
                    </li>

                    <li class="flex justify-between gap-4">
                        <span>Samedi</span>
                        <span class="font-semibold text-white">11h30 - 23h00</span>
                    </li>

                    <li class="flex justify-between gap-4">
                        <span>Dimanche</span>
                        <span class="font-semibold text-white">12h00 - 21h00</span>
                    </li>

                </ul>

            </div>


            <!-- Contact & Address -->
            <div class="rounded-2xl bg-white/10 p-6 backdrop-blur-md border border-white/20">

                <h4 class="mb-4 text-lg font-bold text-white">
                    Contact
                </h4>

                <ul class="space-y-3 text-sm text-white/80">

                    <li class="flex items-start gap-3">

                        <span class="text-white">📍</span>

                        <span>
                            123 Rue de la Gastronomie,
                            <br>
                            75001 Paris, France
                        </span>

                    </li>

                    <li class="flex items-center gap-3">

                        <span class="text-white">📞</span>

                        <a href="tel:+33123456789" class="hover:text-white transition">
                            +33 1 23 45 67 89
                        </a>

                    </li>

                    <li class="flex items-center gap-3">

                        <span class="text-white">✉️</span>

                        <a href="mailto:contact@laratatouille.fr" class="hover:text-white transition">
                            contact@laratatouille.fr
                        </a>

                    </li>

                </ul>

            </div>


            <!-- Services & Payment -->
            <div class="rounded-2xl bg-white/10 p-6 backdrop-blur-md border border-white/20">

                <h4 class="mb-4 text-lg font-bold text-white">
                    Services & Paiement
                </h4>

                <ul class="space-y-3 text-sm text-white/80">

                    <li class="flex items-center gap-3">

                        <span class="text-white">🅿️</span>

                        <span>
                            Parking gratuit
                        </span>

                    </li>

                    <li class="flex items-center gap-3">

                        <span class="text-white">📶</span>

                        <span>
                            Wi-Fi gratuit
                        </span>

                    </li>

                    <li class="flex items-center gap-3">

                        <span class="text-white">🌿</span>

                        <span>
                            Terrasse ensoleillée
                        </span>

                    </li>

                    <li class="flex items-center gap-3">

                        <span class="text-white">💳</span>

                        <span>
                            CB · Visa · Mastercard · Espèces
                        </span>

                    </li>

                </ul>

            </div>

        </div>


        <!-- Bottom bar -->
        <div class="mt-10 flex flex-col items-center justify-between gap-4 border-t border-white/20 pt-6 md:flex-row">

            <p class="text-sm text-white/80">
                © <?= date('Y') ?> La Ratatouille — Tous droits réservés
            </p>

            <p class="text-sm text-white/60">
                Créé par DevTeam
            </p>

        </div>

    </div>

</footer>

<script src="<?= base_url('js/reservation-cart.js') ?>"></script>
<script src="<?= base_url('js/menu-selector.js') ?>"></script>
<script src="<?= base_url('js/reservation.js') ?>"></script>
<script src="<?=base_url('js/form-validation.js')?>"></script>
<script src="<?= base_url('js/modal.js') ?>"></script>
<script src="<?= base_url('js/auth-state.js')?>"></script>
<script src="<?= base_url('js/menu.js') ?>"></script>
<script src="<?= base_url('js/mobile-menu.js') ?>"></script>
<script src="<?= base_url('js/typewriter.js') ?>"></script>
<script src="<?= base_url('js/hero-animations.js') ?>"></script>
<script src="<?= base_url('js/chefs.js') ?>"></script>
</body>

</html>