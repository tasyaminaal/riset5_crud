<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Permission extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPermission' => [
                'type' => 'BINARY',
                'constraint' => '16',
            ],
            'controller' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'view' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'version' => [
                'type' => 'INT',
                'constraint' => '2',
            ],
        ]);

        $this->forge->addKey('idPermission', TRUE);
        $this->forge->createTable('permission');
    }

    public function down()
    {
        $this->forge->dropTable('permission');
    }
}
