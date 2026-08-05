<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentsTable extends Migration
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

        'method' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
        ],

        'transaction_reference' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => true,
        ],

        'amount' => [
            'type' => 'NUMERIC',
            'constraint' => '10,2',
        ],

        'status' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'default' => 'PENDING',
        ],

        'confirmed_at' => [
            'type' => 'TIMESTAMP',
            'null' => true,
        ],

        'created_at' => [
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


    $this->forge->createTable('payments');
}


public function down()
{
    $this->forge->dropTable('payments');
}
}
