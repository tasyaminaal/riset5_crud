<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RolePermission extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idRole' => [
				'type' => 'BINARY',
				'constraint' => '16',
			],
			'idPermission' => [
				'type' => 'BINARY',
				'constraint' => '16',
			],
		]);

        $this->forge->addKey('idRole', TRUE);
        $this->forge->addKey('idPermission', TRUE);

        // masih dalam perbaikan DB dan RBAC
        $this->forge->addForeignKey('idRole','role','idRole','CASCADE','CASCADE');
        $this->forge->addForeignKey('idPermission','permission','idPermission','CASCADE','CASCADE');


		$this->forge->createTable('rolePermission');
	}

	public function down()
	{
		$this->forge->dropTable('rolePermission');
	}
}