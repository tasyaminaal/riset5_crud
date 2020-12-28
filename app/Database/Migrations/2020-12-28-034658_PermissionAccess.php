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

        // di pdf tulisannya gini
        // FOREIGN KEY idPermission REFERENCES Permission(idPermission) ON UPDATE CASCADE ON DELETE CASCADE
        // tolong koreksinya ya kalo ini salah
        $this->forge->addForeignKey('idPermission', 'permission', 'idPermission', 'CASCADE', 'CASCADE');

        // di pdf tulisannya gini
        // FOREIGN KEY idAccess REFERENCES Access(idAccess) ON UPDATE CASCADE ON DELETE CASCADE
        $this->forge->addForeignKey('idAccess', 'access', 'idAccess', 'CASCADE', 'CASCADE');

        $this->forge->createTable('permission_access');
    }

    public function down()
    {
        $this->forge->dropTable('permission_access');
    }
}
