<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Client_App extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'uId' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'nama_app' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'deskripsi' => [
				'type' => 'VARCHAR',
				'constraint' => '225',
			],
			'redirectt' => [
				'type' => 'VARCHAR',
				'constraint' => '225',
			],
			'req_date' => [
				'type' => 'DATETIME',
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => ['diterima','ditolak','review'],
				'default' => 'review',
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('client_app');
	}

	public function down()
	{
		$this->forge->dropTable('client_app');
	}
}