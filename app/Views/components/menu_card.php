<?php

/**
 * @var array{
 *     id: int,
 *     name: string,
 *     type: string,
 *     description: string,
 *     image: string,
 *     price: float,
 *     discount_price: float|null,
 *     daily_limit: int|null,
 *     remaining_quantity: int|null,
 *     available: bool
 * } $item Menu item data passed from the menu list view.
 */
?>

<div
    class="menu-item group overflow-hidden rounded-2xl
           bg-(--card)
           shadow-md
           transition
           hover:-translate-y-2"
    data-type="<?= esc($item['type']) ?>">


    <div class="relative">


        <img
            src="<?= base_url($item['image']) ?>"
            class="h-56 w-full object-cover">



        <?php if ($item['discount_price']): ?>

            <span
                class="absolute right-3 top-3 rounded-full
                       bg-green-600 px-3 py-1 text-white">

                Promotion

            </span>

        <?php endif; ?>


    </div>



    <div class="p-5">


        <p class="text-(--primary) font-bold">
            <?= ucfirst(strtolower($item['type'])) ?>
        </p>


        <h3 class="text-xl font-bold">
            <?= esc($item['name']) ?>
        </h3>


        <p>
            <?= esc($item['description']) ?>
        </p>



        <div class="mt-3">

            <?php if ($item['discount_price']): ?>

                <span class="text-2xl font-bold text-green-600">

                    <?= $item['discount_price'] ?> €

                </span>


                <span class="line-through">

                    <?= $item['price'] ?> €

                </span>


            <?php else: ?>

                <span class="text-2xl font-bold">

                    <?= $item['price'] ?> €

                </span>


            <?php endif; ?>

        </div>



    </div>


</div>