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
				'default' => 'default.svg',
			],
			'idAkses'	=> [
				'type' => 'INT',
				'constraint' => 16,
				'unsigned'	=> true,
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
		// tabel akses
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
			'twitter' => [
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
		$this->forge->createTable('akses');

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
		// tabel foto
		$this->forge->addField([
			'id_foto' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_file' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'caption' => [
				'type' => 'VARCHAR',
				'constraint' => '2200',
				'null'	=> true,
			],
			'created_at' => [
				'type' => 'DATE',
			],
			'album' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'approval' => [
				'type' => 'Boolean',
				'default' => 0,
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
		]);

		//primary key
		$this->forge->addKey('id_foto', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('foto');

		//================================================================== 
		// tabel tag_foto
		$this->forge->addField([
			'tag' => [
				'type'           => 'VARCHAR',
				'constraint'     => 80,
				'null'			 => true,
			],
			'id_foto' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
			],
		]);

		//primary key
		$this->forge->addKey('tag', TRUE);
		$this->forge->addKey('id_foto', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_foto', 'foto', 'id_foto', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('tag_foto');

		//================================================================== 
		// tabel report
		$this->forge->addField([
			'id_report' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
				'auto_increment'	=> true,
			],
			'alasan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 300,
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
			'id_foto' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
			],
		]);

		//primary key
		$this->forge->addKey('id_report', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_foto', 'foto', 'id_foto', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('report');

		//================================================================== 
		// tabel video
		$this->forge->addField([
			'id_video' => [
				'type'           => 'INT',
				'constraint'     => 16,
				'unsigned'       => true,
				'auto_increment'	=> true,
			],
			'link' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'album' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'created_at' => [
				'type'           => 'DATE',
			],
			'approval'=>[
				'type'           => 'Boolean',
				'default'	=> 0,
			],
			'id_alumni' => [
				'type' => 'VARCHAR',
				'constraint' => '7',
			],
		]);

		//primary key
		$this->forge->addKey('id_video', TRUE);
		//foreign key
		$this->forge->addForeignKey('id_alumni', 'alumni', 'id_alumni', 'CASCADE', 'CASCADE');
		//create table
		$this->forge->createTable('video');
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
