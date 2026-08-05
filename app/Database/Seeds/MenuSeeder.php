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
        ];

        $this->db->table('menu_items')->insertBatch($data);
    }
}