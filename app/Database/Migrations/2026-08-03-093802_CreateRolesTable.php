<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRolesTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'SERIAL',
        ],
        'name' => [
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'unique'     => true,
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
    $this->forge->createTable('roles');
}

public function down()
{
    $this->forge->dropTable('roles');
}
}
