<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservationsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type' => 'SERIAL',
        ],

        'user_id' => [
            'type' => 'INT',
            'null' => true,
        ],

        // Snapshot customer information
        // in case user changes profile later
        'client_name' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
        ],

        'client_email' => [
            'type' => 'VARCHAR',
            'constraint' => 150,
        ],

        'client_phone' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
        ],

        'reservation_date' => [
            'type' => 'DATE',
        ],

        'reservation_time' => [
            'type' => 'TIME',
        ],

        'number_of_people' => [
            'type' => 'INT',
        ],

        // Generated after payment confirmation
        'verification_code' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => true,
            'unique' => true,
        ],

        'status' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'default' => 'WAITING_PAYMENT',
        ],

        'table_number' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'null' => true,
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
        'user_id',
        'users',
        'id',
        'SET NULL',
        'CASCADE'
    );

    $this->forge->createTable('reservations');
}


public function down()
{
    $this->forge->dropTable('reservations');
}
}
