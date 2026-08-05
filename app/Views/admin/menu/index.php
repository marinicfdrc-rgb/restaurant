<?php
/**
 * @var array<int, array{
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
 * }> $menu List of menu items passed from the admin controller.
 */
?>

<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="min-h-screen bg-(--background) py-10">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-bold text-(--foreground)">
                Gestion du Menu
            </h1>

            <a href="/admin/menu/create" class="px-6 py-3 rounded-lg bg-(--primary) text-white hover:opacity-90 transition">
                Ajouter un plat
            </a>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($menu as $item): ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= base_url($item['image']) ?>" alt="<?= esc($item['name']) ?>" class="w-full h-48 object-cover">

                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2"><?= esc($item['name']) ?></h3>
                        
                        <p class="text-gray-600 text-sm mb-3"><?= esc($item['description']) ?></p>
                        
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-2xl font-bold text-(--primary)"><?= esc((string) $item['price']) ?> €</span>
                            
                            <?php if ($item['discount_price']): ?>
                                <span class="text-lg text-red-600 line-through"><?= esc((string) $item['discount_price']) ?> €</span>
                            <?php endif; ?>
                        </div>

                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span class="px-3 py-1 bg-gray-200 rounded"><?= esc($item['type']) ?></span>
                            
                            <span>
                                <?php if ($item['available']): ?>
                                    <span class="text-green-600">✓ Disponible</span>
                                <?php else: ?>
                                    <span class="text-red-600">✗ Indisponible</span>
                                <?php endif; ?>
                            </span>
                        </div>

                        <form action="/admin/menu/delete/<?= $item['id'] ?>" method="POST" onsubmit="return confirm('Êtes-vous sûr ?')">
                            <?= csrf_field() ?>
                            <button type="submit" class="w-full px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (empty($menu)): ?>
            <div class="text-center py-20">
                <p class="text-xl text-gray-500">Aucun plat dans le menu.</p>
                <a href="/admin/menu/create" class="inline-block mt-6 px-6 py-3 rounded-lg bg-(--primary) text-white hover:opacity-90 transition">
                    Ajouter le premier plat
                </a>
            </div>
        <?php endif; ?>

    </div>
</div>

<?= $this->endSection() ?>