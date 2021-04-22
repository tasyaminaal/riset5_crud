<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Webservice extends Migration
{
	public function up()
	{

		//================================================================== 
		// tabel scope_app
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'scope' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'scope_dev' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);

		//primary key
		$this->forge->addKey('id', TRUE);
		//create table
		$this->forge->createTable('scope_app');

		//================================================================== 
		// tabel token_app
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'token' => [
				'type'           => 'VARCHAR',
				'constraint'     => 30,
				'null'			 => true,
			],
			'count_usage' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'default'		 => 0,
			],
			'last_access' => [
				'type'           => 'DATETIME',
				'null'			 => true,
			],
		]);

		//primary key
		$this->forge->addKey('id', TRUE);
		//create table
		$this->forge->createTable('token_app');


		//================================================================== 
		// tabel client_app
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'uid' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'null'			 => true,
			],
			'nama_app' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'deskripsi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'status' => [
				'type'           => 'ENUM',
				'constraint'     => ['Review', 'Diterima', 'Ditolak'],
				'default'		 => 'Review',
			],
			'req_date' => [
				'type'           => 'DATETIME',
				'null'			 => true,
			],
			'req_acc' => [
				'type'           => 'DATETIME',
				'null'			 => true,
			],
			'uid_admin' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'null'			 => true,
			],
			'id_token' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'null'			 => true,
			],
		]);

		//primary key
		$this->forge->addKey('id', TRUE);
		//foreign key
		$this->forge->addForeignKey('uid', 'users', 'id', 'SET NULL', 'CASCADE');
		$this->forge->addForeignKey('uid_admin', 'users', 'id', 'SET NULL', 'CASCADE');
		$this->forge->addForeignKey('id_token', 'token_app', 'id', 'SET NULL', 'CASCADE');
		//create table
		$this->forge->createTable('client_app');


		//================================================================== 
		// tabel token_scope
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_token' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'id_scope' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
		]);

		//primary key
		$this->forge->addKey('id', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_token', 'token_app', 'id');
		$this->forge->addForeignKey('id_scope', 'scope_app', 'id');
		//create table
		$this->forge->createTable('token_scope');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
