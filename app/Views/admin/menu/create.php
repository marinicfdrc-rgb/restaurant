<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="min-h-screen bg-(--background) py-10">
    <div class="max-w-3xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-(--foreground) mb-8">Ajouter un plat</h1>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <ul class="list-disc list-inside">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="/admin/menu/store" method="POST" class="bg-white rounded-lg shadow-lg p-8">
            <?= csrf_field() ?>

            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nom du plat *</label>
                <input type="text" name="name" id="name" value="<?= old('name') ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-6">
                <label for="type" class="block text-gray-700 font-bold mb-2">Catégorie *</label>
                <select name="type" id="type" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                    <option value="">Sélectionner</option>
                    <option value="ENTREE">Entrée</option>
                    <option value="PLAT">Plat</option>
                    <option value="SOUPE">Soupe</option>
                    <option value="DESSERT">Dessert</option>
                    <option value="BOISSON">Boisson</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description *</label>
                <textarea name="description" id="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required><?= old('description') ?></textarea>
            </div>

            <div class="mb-6">
                <label for="image" class="block text-gray-700 font-bold mb-2">Chemin image *</label>
                <input type="text" name="image" id="image" value="<?= old('image') ?>" placeholder="uploads/menu/nom.webp" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="price" class="block text-gray-700 font-bold mb-2">Prix (€) *</label>
                    <input type="number" name="price" id="price" step="0.01" value="<?= old('price') ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div>
                    <label for="discount_price" class="block text-gray-700 font-bold mb-2">Prix promo (€)</label>
                    <input type="number" name="discount_price" id="discount_price" step="0.01" value="<?= old('discount_price') ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="daily_limit" class="block text-gray-700 font-bold mb-2">Limite quotidienne</label>
                    <input type="number" name="daily_limit" id="daily_limit" value="<?= old('daily_limit') ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>
                <div>
                    <label for="remaining_quantity" class="block text-gray-700 font-bold mb-2">Quantité restante</label>
                    <input type="number" name="remaining_quantity" id="remaining_quantity" value="<?= old('remaining_quantity') ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>
            </div>

            <div class="mb-6">
                <label class="flex items-center">
                    <input type="checkbox" name="available" value="1" <?= old('available') ? 'checked' : 'checked' ?> class="w-4 h-4">
                    <span class="ml-2 text-gray-700">Disponible</span>
                </label>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="px-6 py-3 bg-(--primary) text-white rounded-lg hover:opacity-90 transition">Ajouter</button>
                <a href="/admin/menu" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">Annuler</a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
