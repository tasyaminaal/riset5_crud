<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RBAC extends Migration
{
	public function up()
	{
		//================================================================== 
        // tabel groups_access
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'access_group_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'group_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'menu_access_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
		]);

		//primary key
		$this->forge->addKey('access_group_id', true);
		//forign key
		$this->forge->addForeignKey('group_id', 'group', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('menu_access_id', 'submenu_access', 'menu_access_id', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('groups_access');

		//================================================================== 
        // tabel submenu_access
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'menu_access_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'submenu_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'crud_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
		]);

		//primary key
		$this->forge->addKey('menu_access_id', true);
		//foreign key
		$this->forge->addForeignKey('submenu_id', 'submenu', 'submenu_id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('crud_id', 'crud', 'crud_id', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('submenu_access');

		//================================================================== 
		// tabel submenu
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'submenu_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'menu_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'url'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'icon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128',
			],
			'active'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
		]);

		//primary key
		$this->forge->addKey('submenu_id', true);
		//foreign key
		$this->forge->addForeignKey('menu_id', 'menu', 'menu_id', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('submenu');

		//================================================================== 
		// tabel menu
		$this->forge->addField([
			'menu_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'menu_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'menu_icon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
		]);

		//primary key
		$this->forge->addKey('menu_id', true);
		//create table
		$this->forge->createTable('menu');

		//================================================================== 
		// tabel crud
		$this->forge->addField([
			'crud_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'crud_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
		]);

		//primary key
		$this->forge->addKey('crud_id', true);
		//create table
		$this->forge->createTable('crud');

		//================================================================== 
		// tabel activity_log
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
			'activity_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'time'       => [
				'type'           => 'DATETIME',
			],
			'user_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'group_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
			'access_name'       => [
				'type'           => 'INT',
				'constraint'     => '1',
			],
			'target_scope_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'description'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'status'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
		]);

		//primary key
		$this->forge->addKey('activity_id', true);
		//foreign key
		$this->forge->addForeignKey('target_scope_id', 'table_scope', 'target_scope_id', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('activity_log');

		//================================================================== 
		// tabel table_scope
		$this->forge->addField([
			'target_scope_id'          => [
				'type'           => 'INT',
				'constraint'     => 1,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'target_scope'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
		]);

		//primary key
		$this->forge->addKey('target_scope_id', true);
		//create table
		$this->forge->createTable('target_scope');

		//================================================================== 
	}

	public function down()
	{
		//tabel groups_access
		$this->forge->dropTable('groups_access');

		//tabel submenu_access
		$this->forge->dropTable('submenu_access');

		//tabel submenu
		$this->forge->dropTable('submenu');

		//tabel menu
		$this->forge->dropTable('menu');

		//tabel crud
		$this->forge->dropTable('crud');

		//tabel activity_log
		$this->forge->dropTable('activity_log');

		//tabel table_scope
		$this->forge->dropTable('table_scope');
	}
}
