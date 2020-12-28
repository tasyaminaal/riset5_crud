<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Role extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idRole' => [
				'type' => 'BINARY',
				'constraint' => '16',
			],
			'roleName' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
		]);

		$this->forge->addKey('idRole', TRUE);
		$this->forge->createTable('role');
	}

	public function down()
	{
		$this->forge->dropTable('role');
	}
}