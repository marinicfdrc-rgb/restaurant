<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type' => 'SERIAL',
        ],

        'role_id' => [
            'type' => 'INT',
        ],

        'name' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
        ],

        'email' => [
            'type' => 'VARCHAR',
            'constraint' => 150,
            'unique' => true,
        ],

        'password' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
        ],

        'phone' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
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
        'role_id',
        'roles',
        'id',
        'CASCADE',
        'CASCADE'
    );

    $this->forge->createTable('users');
}

public function down()
{
    $this->forge->dropTable('users');
}
}
