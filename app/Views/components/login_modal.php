<div
    id="login-modal"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80"
>


    <div
        class="w-full max-w-md rounded-2xl bg-(--card) p-8 shadow-xl"
    >

        <div class="mb-6 flex justify-between">

            <h2 class="text-2xl font-bold">
                Connexion
            </h2>


            <button
                class="close-modal text-xl"
            >
                ✕
            </button>

        </div>



        <form id="login-form" class="space-y-4" novalidate>


            <div>

<input
id="login-email"
type="email"
autocomplete="email"
placeholder="exemple@email.com"
class="w-full rounded-lg border p-3"
>


<p
id="login-email-error"
class="mt-1 hidden text-sm text-red-500"
></p>

</div>


<div class="relative">


<input
id="login-password"
type="password"
autocomplete="current-password"
placeholder="Mot de passe"
class="w-full rounded-lg border p-3 pr-12"
>



<button
type="button"
class="password-toggle absolute right-3 top-3"
data-target="login-password"
>
👁
</button>


<p
id="login-password-error"
class="mt-1 hidden text-sm text-red-500"
></p>


</div>



            <button
    type="submit"
    class="w-full rounded-lg bg-(--primary) py-3 text-white"
>
    Se connecter
</button>


        </form>



    </div>


</div>