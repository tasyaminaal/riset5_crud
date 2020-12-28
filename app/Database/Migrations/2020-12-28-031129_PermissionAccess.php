<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PermissionAccess extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPermission' => [
                'type' => 'BINARY',
                'constraint' => '16',
            ],
            'idAccess' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);

        $this->forge->addKey('idPermission', TRUE);
        $this->forge->addKey('idAccess', TRUE);

        // masih dalam perbaikan DB dan RBAC
        $this->forge->addForeignKey('idPermission', 'permission', 'idPermission', 'CASCADE', 'CASCADE');

        /// masih dalam perbaikan DB dan RBAC
        $this->forge->addForeignKey('idAccess', 'access', 'idAccess', 'CASCADE', 'CASCADE');

        $this->forge->createTable('permissionAccess');
    }

    public function down()
    {
        $this->forge->dropTable('permissionAccess');
    }
}
