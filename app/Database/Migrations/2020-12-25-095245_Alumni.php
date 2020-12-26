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
				// ditambah null untuk keperluan development
				'null' => true,
			],
			'jenisKelamin' => [
				'type' => 'VARCHAR',
				'constraint' => '1',
				// ditambah null untuk keperluan development
				'null' => true,
			],
			'tempatLahir' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				// ditambah null untuk keperluan development
				'null' => true,
			],
			'tanggalLahir' => [
				'type' => 'DATE',
				// ditambah null untuk keperluan development
				'null' => true,
			],
			'telpAlumni' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
				// ditambah null untuk keperluan development
				'null' => true,
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				// ditambah null untuk keperluan development
				'null' => true,
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