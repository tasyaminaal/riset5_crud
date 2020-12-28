<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prestasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idPrestasi' => [
				'type' => 'BINARY',
				'constraint' => '16',
			],
			'namaPrestasi' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true,
			],
			'tahunPrestasi' => [
				'type' => 'YEAR',
				'null' => true,
			],
		]);

		$this->forge->addKey('idPrestasi', TRUE);

		//nunggu dikoreksi DB
		// $this->forge->addForeignKey('idPrestasi','prestasi','idPrestasi','CASCADE','CASCADE');
		// gives CONSTRAINT `TABLENAME_users_foreign` FOREIGN KEY(`idprestasi`) REFERENCES `prestasi`(`idprestasi`) ON DELETE CASCADE ON UPDATE CASCADE

		$this->forge->createTable('prestasi');
	}

	public function down()
	{
		$this->forge->dropTable('prestasi');
	}
}