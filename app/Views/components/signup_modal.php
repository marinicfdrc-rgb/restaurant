<div id="signup-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80">
    <div class="w-full max-w-md rounded-2xl bg-(--card) p-8 shadow-xl">
        <div class="mb-6 flex justify-between">
            <h2 class="text-2xl font-bold">
                Inscription
            </h2>
            <button class="close-modal text-xl">
                ✕
            </button>
        </div>

        <form id="signup-form" class="space-y-4" novalidate>

            <div>
                <input id="signup-name" placeholder="Nom" class="w-full rounded-lg border p-3">
                <p id="signup-name-error" class="mt-1 hidden text-sm text-red-500"></p>
            </div>

            <div>
                <input id="signup-email" type="email" placeholder="exemple@email.com"
                    class="w-full rounded-lg border p-3">
                <p id="signup-email-error" class="mt-1 hidden text-sm text-red-500"></p>
            </div>

            <div>
                <input id="signup-phone" type="tel" placeholder="Téléphone" class="w-full rounded-lg border p-3">
                <p id="signup-phone-error" class="mt-1 hidden text-sm text-red-500"></p>
            </div>

            <div class="relative">
                <input id="signup-password" type="password" placeholder="Mot de passe"
                    class="w-full rounded-lg border p-3 pr-12">
                <button type="button" class="password-toggle absolute right-3 top-3" data-target="signup-password">
                    👁
                </button>
                <p id="signup-password-error" class="mt-1 hidden text-sm text-red-500"></p>
            </div>

            <div class="relative">
                <input id="signup-confirm-password" type="password" placeholder="Confirmer le mot de passe"
                    class="w-full rounded-lg border p-3 pr-12">
                <button type="button" class="password-toggle absolute right-3 top-3"
                    data-target="signup-confirm-password">
                    👁
                </button>
                <p id="signup-confirm-password-error" class="mt-1 hidden text-sm text-red-500"></p>
            </div>



            <button type="submit" class="w-full rounded-lg bg-(--primary) py-3 text-white">
                Créer un compte
            </button>


        </form>


    </div>


</div>