<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alumni extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => '80',
			],
			'nim' => [
				'type' => 'VARCHAR',
				'constraint' => '12',
			],
			'angkatan' => [
				'type' => 'VARCHAR',
				'constraint' => '4',
			],
			'jenisKelamin' => [
				'type' => 'VARCHAR',
				'constraint' => '1',
			],
			'tempatLahir' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'tanggalLahir' => [
				'type' => 'DATE',
			],
			'telpAlumni' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
		]);

		$this->forge->addKey('nim', TRUE);
		$this->forge->createTable('alumni');
	}

	public function down()
	{
		$this->forge->dropTable('alumni');
	}
}
