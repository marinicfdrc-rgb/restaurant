<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservationItemsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type' => 'SERIAL',
        ],

        'reservation_id' => [
            'type' => 'INT',
        ],

        'menu_item_id' => [
            'type' => 'INT',
        ],

        'quantity' => [
            'type' => 'INT',
        ],

        // Keep historical price
        'price' => [
            'type' => 'NUMERIC',
            'constraint' => '10,2',
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


    $this->forge->addForeignKey(
        'reservation_id',
        'reservations',
        'id',
        'CASCADE',
        'CASCADE'
    );


    $this->forge->addForeignKey(
        'menu_item_id',
        'menu_items',
        'id',
        'RESTRICT',
        'CASCADE'
    );


    $this->forge->createTable('reservation_items');
}


public function down()
{
    $this->forge->dropTable('reservation_items');
}
}
