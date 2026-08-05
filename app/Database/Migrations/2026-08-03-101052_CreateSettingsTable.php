<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSettingsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type' => 'SERIAL',
        ],

        'key' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'unique' => true,
        ],

        'value' => [
            'type' => 'TEXT',
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
    $this->forge->createTable('settings');
}


public function down()
{
    $this->forge->dropTable('settings');
}
}
