<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idUser' => [
				'type' => 'BINARY',
				'constraint' => '16',
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'passwordHash' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'created_At' => [
				'type' => 'DATETIME',
			],
			'updated_At' => [
				'type' => 'DATETIME',
			],
			'active' => [
				'type' => 'INT',
			],
			'nim' => [
				'type' => 'VARCHAR',
				'constraint' => '12',
				'null' => true,
			],
		]);

		$this->forge->addKey('idUser', TRUE);
		// gives PRIMARY KEY `User` (`idUser`)

		$this->forge->addForeignKey('nim','alumni','nim','CASCADE','CASCADE');

		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}