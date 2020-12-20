<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Auth extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '9',
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'role' => [
				'type' => 'INT',
				'constraint' => 1,
				'default' => 1,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('auth');
	}

	public function down()
	{
		$this->forge->dropTable('auth');
	}
}
