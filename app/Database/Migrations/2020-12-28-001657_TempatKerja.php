<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TempatKerja extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idTempatKerja' => [
				'type' => 'BINARY',
				'constraint' => '16',
			],
			'namaInstansi' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'alamatInstansi' => [
				'type' => 'TEXT',
			],
			'telpInstansi' => [
				'type' => 'VARCHAR',
				'constraint' => '25',
			],
			'faksInstansi' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'emailInstansi' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
		]);

		$this->forge->addKey('idTempatKerja', TRUE);
		// gives PRIMARY KEY `tempatKerja` (`idTempatKerja`)

		//nunggu dikoreksi DB
		// $this->forge->addForeignKey('idTempatKerja','tempatKerja','idTempatKerja','CASCADE','CASCADE');
		// gives CONSTRAINT `TABLENAME_users_foreign` FOREIGN KEY(`idTempatKerja`) REFERENCES `tempatKerja`(`idTempatKerja`) ON DELETE CASCADE ON UPDATE CASCADE

		$this->forge->createTable('tempatKerja');
	}

	public function down()
	{
		$this->forge->dropTable('tempatKerja');
	}
}