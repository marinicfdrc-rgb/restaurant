<div id="reservation-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80">


    <div class="flex h-[85vh] w-[95vw] max-w-7xl flex-col rounded-2xl bg-(--card) shadow-xl">


        <!-- HEADER -->

        <div class="flex items-center justify-between border-b p-6">

            <h2 class="text-2xl font-bold">
                Réservation
            </h2>


            <button type="button" class="close-modal text-xl">
                ✕
            </button>


        </div>



        <!-- BODY -->

        <form id="reservation-form" class="grid flex-1 grid-cols-12 overflow-hidden">



            <!-- LEFT -->

            <div class="col-span-3 border-r p-6">


                <h3 class="mb-5 text-xl font-bold">
                    Informations
                </h3>



                <div class="space-y-4">


                    <input id="reservation-date" type="date" class="w-full rounded-lg border p-3">


                    <input id="reservation-time" type="time" class="w-full rounded-lg border p-3">



                    <input id="reservation-people" type="number" placeholder="Nombre de personnes"
                        class="w-full rounded-lg border p-3">



                    <input id="client-name" placeholder="Nom" class="w-full rounded-lg border p-3">



                    <input id="client-phone" placeholder="Téléphone" class="w-full rounded-lg border p-3">


                </div>


            </div>





            <!-- CENTER MENU -->

            <div class="col-span-6 flex flex-col overflow-hidden">


                <div class="border-b p-6">


                    <input id="menu-search" placeholder="Rechercher un plat..." class="w-full rounded-lg border p-3">


                    <div class="mt-4 flex flex-wrap justify-center gap-2">

                        <button type="button" class="menu-category rounded-full
                            bg-blue-500
                            px-5 py-2 text-white" data-category="all">
                            Tous
                        </button>


                        <button type="button" class="menu-category rounded-full border px-5 py-2"
                            data-category="ENTREE">
                            Entrées
                        </button>


                        <button type="button" class="menu-category rounded-full border px-5 py-2" data-category="PLAT">
                            Plats
                        </button>


                        <button type="button" class="menu-category rounded-full border px-5 py-2" data-category="SOUPE">
                            Soupes
                        </button>


                        <button type="button" class="menu-category rounded-full border px-5 py-2"
                            data-category="DESSERT">
                            Desserts
                        </button>


                        <button type="button" class="menu-category rounded-full border px-5 py-2"
                            data-category="BOISSON">
                            Boissons
                        </button>


                    </div>


                </div>




                <!-- ONLY THIS SCROLLS -->

                <div id="menu-selector" class="flex-1 overflow-y-auto p-6">


                </div>



            </div>





            <!-- RIGHT CART -->

            <div class="col-span-3 flex flex-col border-l p-6">


                <h3 class="mb-5 text-xl font-bold">
                    Commande
                </h3>



                <!-- CART SCROLL IF NEEDED -->

                <div id="reservation-cart" class="flex-1 overflow-y-auto">


                </div>



                <div class="border-t pt-5">


                    <div class="mb-4 flex justify-between text-xl font-bold">

                        <span>
                            Total
                        </span>


                        <span id="cart-total">
                            0 €
                        </span>


                    </div>



                    <button id="submit-reservation" type="submit"
                        class="w-full rounded-lg bg-(--primary) py-3 text-white">

                        Réserver

                    </button>


                </div>

        </form>

    </div>



</div>



</div>

</div>