<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Access extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idAccess' => [
				'type' => 'BINARY',
				'constraint' => '16',
			],
			'accessName' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
		]);

		$this->forge->addKey('idAccess', TRUE);
		$this->forge->createTable('access');
	}

	public function down()
	{
		$this->forge->dropTable('access');
	}
}