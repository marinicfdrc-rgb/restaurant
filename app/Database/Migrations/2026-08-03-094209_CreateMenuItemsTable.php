<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuItemsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type' => 'SERIAL',
        ],

        'name' => [
            'type' => 'VARCHAR',
            'constraint' => 150,
        ],

        'type' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
        ],

        'description' => [
            'type' => 'TEXT',
            'null' => true,
        ],

        'image' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => true,
        ],

        'price' => [
            'type' => 'NUMERIC',
            'constraint' => '10,2',
        ],

        'discount_price' => [
            'type' => 'NUMERIC',
            'constraint' => '10,2',
            'null' => true,
        ],

        'daily_limit' => [
            'type' => 'INT',
            'null' => true,
        ],

        'remaining_quantity' => [
            'type' => 'INT',
            'null' => true,
        ],

        'available' => [
            'type' => 'BOOLEAN',
            'default' => true,
        ],

        'created_at' => [
            'type' => 'TIMESTAMP',
            'null' => true,
        ],

        'updated_at' => [
            'type' => 'TIMESTAMP',
            'null' => true,
        ],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->createTable('menu_items');
}

public function down()
{
    $this->forge->dropTable('menu_items');
}
}
