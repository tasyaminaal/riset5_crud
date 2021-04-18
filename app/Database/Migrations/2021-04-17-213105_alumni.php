<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alumni extends Migration
{
	public function up()
	{
		//==================================================================
		// tabel alumni
		$this->forge->addField([
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => '80',
			],
			'jenis_kelamin' => [
				'type' => 'VARCHAR',
				'constraint' => '2',
			],
			'tempat_lahir' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null'	=> true,
			],
			'tanggal_lahir' => [
				'type' => 'DATE',
				'null'	=> true,
			],
			'telp_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => true,
			],
			'alamat_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true,
			],
			'kota' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'provinsi' => [
				'type' => 'VARCHAR',
				'constraint' => '24',
				'null' => true,
			],
			'negara' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'status_bekerja' => [
				'type' => 'BOOLEAN',
			],
			'perkiraan_pensiun' => [
				'type' => 'YEAR',
				'null' => true,
			],
			'jabatan_terakhir' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'aktif_pns' => [
				'type' => 'BOOLEAN',
			],
			'deskripsi' => [
				'type' => 'VARCHAR',
				'constraint' => '300',
				'null' => true,
			],
			'ig' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'fb' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'twitter' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'nip' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => true,
			],
			'nip_bps' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => true,
			],
			'foto_profil' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
		]);

		//primary key
		$this->forge->addKey('id_alumni', TRUE);
		//create table
		$this->forge->createTable('alumni');

		//==================================================================
		// tabel tempat_kerja
		$this->forge->addField([
			'id_tempat_kerja' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_instansi' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'kota' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'provinsi' => [
				'type' => 'VARCHAR',
				'constraint' => '24',
				'null' => true,
			],
			'negara' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'alamat_instansi' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'telp_instansi' => [
				'type' => 'VARCHAR',
				'constraint' => '25',
				'null' => true,
			],
			'faks_instansi' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'email_instansi' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
		]);

		//primary key
		$this->forge->addKey('id_tempat_kerja', TRUE);
		//create table
		$this->forge->createTable('tempat_kerja');

		//==================================================================
		// tabel alumni_tempat_kerja
		$this->forge->addField([
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
			'id_tempat_kerja' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
			],
		]);

		//primary key
		$this->forge->addKey('id_alumni', TRUE);
		$this->forge->addKey('id_tempat_kerja', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_tempat_kerja', 'tempat_kerja', 'id_tempat_kerja', 'CASCADE', 'CASCADE');
		// create table
		$this->forge->createTable('alumni_tempat_kerja');

		//==================================================================
		// tabel angkatan_alumni
		$this->forge->addField([
			'angkatan' => [
				'type' => 'INT',
				'constraint' => '4',
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
		]);

		//primary key
		$this->forge->addKey('angkatan', TRUE);
		$this->forge->addKey('id_alumni', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		// create table
		$this->forge->createTable('angkatan_alumni');

		//==================================================================    
		// tabel prestasi
		$this->forge->addField([
			'id_prestasi' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_prestasi' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'tahun_prestasi' => [
				'type' => 'YEAR',
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '12',
			],
		]);

		//primary key
		$this->forge->addKey('id_prestasi', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		// create table
		$this->forge->createTable('prestasi');

		//==================================================================
		// tabel email
		$this->forge->addField([
			'email_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
		]);

		//primary key
		$this->forge->addKey('email_alumni', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		// create table
		$this->forge->createTable('email');

		//================================================================== 
		// tabel pendidikan
		$this->forge->addField([
			'id_pendidikan' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'jenjang' => [
				'type' => 'VARCHAR',
				'constraint' => '3',
			],
			'instansi' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'tahun_lulus' => [
				'type' => 'YEAR',
			],
			'tahun_masuk' => [
				'type' => 'YEAR',
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
		]);

		//primary key
		$this->forge->addKey('id_pendidikan', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('pendidikan');

		//================================================================== 
		// tabel pendidikan_tinggi
		$this->forge->addField([
			'id_pendidikan' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
			],
			'program_studi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
			'nim' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'null'			 => true,
			],
			'judul_tulisan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
		]);

		//primary key
		$this->forge->addKey('id_pendidikan', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_pendidikan', 'pendidikan', 'id_pendidikan', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('pendidikan_tinggi');

		//================================================================== 
		// tabel publikasi
		$this->forge->addField([
			'publikasi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'null'			 => true,
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
		]);

		//primary key
		$this->forge->addKey('publikasi', TRUE);
		$this->forge->addKey('id_alumni', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('publikasi');

		//================================================================== 
		// tabel galeri
		$this->forge->addField([
			'id_galeri' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_file' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'komentar' => [
				'type' => 'VARCHAR',
				'constraint' => '3000',
				'null'	=> true,
			],
			'created_at' => [
				'type' => 'DATE',
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
		]);

		//primary key
		$this->forge->addKey('id_galeri', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('galeri');

		//================================================================== 
		// tabel tag_galeri
		$this->forge->addField([
			'tag' => [
				'type'           => 'VARCHAR',
				'constraint'     => 80,
				'null'			 => true,
			],
			'id_galeri' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
			],
		]);

		//primary key
		$this->forge->addKey('tag', TRUE);
		$this->forge->addKey('id_galeri', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_galeri', 'galeri', 'id_galeri', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('tag_galeri');

		//================================================================== 
		// tabel tampilan
		$this->forge->addField([
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
			'ttl' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
			'email' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
			'alamat' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
			'jabatan_terakhir' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
			'ig' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
			'twt' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
			'fb' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
			'pendidikan' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
			'prestasi' => [
				'type' => 'BOOLEAN',
				'default' => '0',
			],
		]);

		//primary key
		$this->forge->addKey('id_alumni', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('tampilan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//tabel alumni
		$this->forge->dropTable('alumni');

		//tabel tempat_kerja
		$this->forge->dropTable('tempat_kerja');

		//tabel alumni_tempat_kerja
		$this->forge->dropTable('alumni_tempat_kerja');

		//tabel angkatan_alumni
		$this->forge->dropTable('angkatan_alumni');

		//tabel prestasi
		$this->forge->dropTable('prestasi');

		//tabel email
		$this->forge->dropTable('email');

		//tabel pendidikan
		$this->forge->dropTable('pendidikan');

		//tabel pendidikan_tinggi
		$this->forge->dropTable('pendidikan_tinggi');

		//tabel publikasi
		$this->forge->dropTable('publikasi');

		//tabel galeri
		$this->forge->dropTable('galeri');

		//tabel tag_galeri
		$this->forge->dropTable('tag_galeri');
	}
}
