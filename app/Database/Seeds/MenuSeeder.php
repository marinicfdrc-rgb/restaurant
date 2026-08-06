<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Soupe à l’Oignon',
                'type' => 'SOUPE',
                'description' => 'Soupe traditionnelle française gratinée au fromage.',
                'image' => 'uploads/menu/soupe-oignon.webp',
                'price' => 9.90,
                'discount_price' => null,
                'daily_limit' => null,
                'remaining_quantity' => null,
                'available' => true,
            ],
            [
                'name' => 'Escargots de Bourgogne',
                'type' => 'ENTREE',
                'description' => 'Escargots au beurre persillé servis par douzaine.',
                'image' => 'uploads/menu/escargots.webp',
                'price' => 12.50,
                'discount_price' => null,
                'daily_limit' => 20,
                'remaining_quantity' => 20,
                'available' => true,
            ],
            [
                'name' => 'Bœuf Bourguignon',
                'type' => 'PLAT',
                'description' => 'Bœuf mijoté au vin rouge avec légumes.',
                'image' => 'uploads/menu/boeuf-bourguignon.webp',
                'price' => 24.90,
                'discount_price' => 21.90,
                'daily_limit' => 15,
                'remaining_quantity' => 15,
                'available' => true,
            ],
            [
                'name' => 'Crème Brûlée',
                'type' => 'DESSERT',
                'description' => 'Crème vanillée à la cassonade caramélisée.',
                'image' => 'uploads/menu/creme-brulee.webp',
                'price' => 8.50,
                'discount_price' => null,
                'daily_limit' => 100,
                'remaining_quantity' => 100,
                'available' => true,
            ],
            [
                'name' => 'Vin Rouge de Bordeaux',
                'type' => 'BOISSON',
                'description' => 'Verre de Bordeaux AOC.',
                'image' => 'uploads/menu/bordeaux.webp',
                'price' => 7.50,
                'discount_price' => null,
                'daily_limit' => 50,
                'remaining_quantity' => 50,
                'available' => true,
            ],
            [
                'name' => 'Glace Vanille Bourbon',
                'type' => 'DESSERT',
                'description' => 'Crème glacée artisanale à la vanille Bourbon de Madagascar.',
                'image' => 'uploads/menu/glace-vanille.webp',
                'price' => 7.50,
                'discount_price' => null,
                'daily_limit' => null,
                'remaining_quantity' => null,
                'available' => true,
            ],
            [
                'name' => 'Coca-Cola',
                'type' => 'BOISSON',
                'description' => 'Coca-Cola 0.5L.',
                'image' => 'uploads/menu/coca-cola.webp',
                'price' => 3.50,
                'discount_price' => null,
                'daily_limit' => null,
                'remaining_quantity' => null,
                'available' => true,
            ],
            [
                'name' => 'Bière',
                'type' => 'BOISSON',
                'description' => 'Bière pression 0.5L.',
                'image' => 'uploads/menu/biere.webp',
                'price' => 5.00,
                'discount_price' => null,
                'daily_limit' => null,
                'remaining_quantity' => null,
                'available' => true,
            ],
            [
                'name' => 'Salade Niçoise',
                'type' => 'ENTREE',
                'description' => 'Salade composée avec thon, œufs, olives et légumes frais.',
                'image' => 'uploads/menu/salade-nicoise.webp',
                'price' => 11.90,
                'discount_price' => null,
                'daily_limit' => 1000,
                'remaining_quantity' => 1000,
                'available' => true,
            ],
            [
                'name' => 'Poulet Rôti',
                'type' => 'PLAT',
                'description' => 'Poulet rôti à la provençale avec herbes et légumes.',
                'image' => 'uploads/menu/poulet-roti.webp',
                'price' => 19.90,
                'discount_price' => 17.90,
                'daily_limit' => 30,
                'remaining_quantity' => 30,
                'available' => true,
            ],
            [
                'name' => 'Salade de fruits frais',
                'type' => 'DESSERT',
                'description' => 'Assortiment de fruits frais de saison.',
                'image' => 'uploads/menu/salade-fruits.webp',
                'price' => 6.50,
                'discount_price' => null,
                'daily_limit' => 200,
                'remaining_quantity' => 200,
                'available' => true,
            ],
            [
                'name' => 'Sardinade',
                'type' => 'ENTREE',
                'description' => 'Sardines grillées à l’huile d’olive et au citron.',
                'image' => 'uploads/menu/sardinade.webp',
                'price' => 10.90,
                'discount_price' => null,
                'daily_limit' => 50,
                'remaining_quantity' => 50,
                'available' => true,
            ],
            [
                'name' => 'Ratatouille',
                'type' => 'PLAT',
                'description' => 'Mélange de légumes mijotés à la provençale avec herbes de Provence. Et c’est le plat qui a inspiré le nom de notre restaurant !',
                'image' => 'uploads/menu/ratatouille.webp',
                'price' => 18.90,
                'discount_price' => null,
                'daily_limit' => 77,
                'remaining_quantity' => 77,
                'available' => true,
            ],
            [
                'name' => 'Pizza Margherita',
                'type' => 'PLAT',
                'description' => 'Pizza classique avec sauce tomate, mozzarella et basilic frais.',
                'image' => 'uploads/menu/pizza-margherita.webp',
                'price' => 14.90,
                'discount_price' => null,
                'daily_limit' => 100,
                'remaining_quantity' => 100,
                'available' => true,
            ],
            [
                'name' => 'Milkshake aux fruits rouges',
                'type' => 'BOISSON',
                'description' => 'Milkshake crémeux aux cerises, fraises et framboises.',
                'image' => 'uploads/menu/milkshake-fruits-rouges.webp',
                'price' => 5.90,
                'discount_price' => null,
                'daily_limit' => null,
                'remaining_quantity' => null,
                'available' => true,
            ],
            [
                'name' => 'Tarte aux baies',
                'type' => 'DESSERT',
                'description' => 'Tartelette aux myrtilles, framboises et mûres avec une pâte sablée maison.',
                'image' => 'uploads/menu/tarte-baies.webp',
                'price' => 7.90,
                'discount_price' => null,
                'daily_limit' => 150,
                'remaining_quantity' => 150,
                'available' => true,
            ],
        ];

        $table = $this->db->table('menu_items');

        foreach ($data as $item) {
            $exists = $table
                ->where('name', $item['name'])
                ->countAllResults();

            if ($exists === 0) {
                $table->insert($item);
            }
        }
    }
}