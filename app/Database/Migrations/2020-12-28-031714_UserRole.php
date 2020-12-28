<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRole extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'idRole' => [
				'type' => 'BINARY',
				'constraint' => '16',
			],
		]);

		$this->forge->addKey('username','idRole', TRUE);
		// gives PRIMARY KEY `userRole` (`username`,`idRole`)

        //$this->forge->addForeignKey('username','user','username','CASCADE','CASCADE');
        //$this->forge->addForeignKey('idRole','role','idRole','CASCADE','CASCADE');
        

		$this->forge->createTable('userRole');
	}

	public function down()
	{
		$this->forge->dropTable('userRole');
	}
}