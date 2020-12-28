<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlumniPublikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPublikasi' => [
                'type' => 'BINARY',
                'constraint' => '16',
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
        ]);

        $this->forge->addKey('idPublikasi', TRUE);
        
        $this->forge->addForeignKey('nim', 'alumni', 'nim', 'CASCADE', 'CASCADE');

        $this->forge->createTable('alumni_publikasi');
    }

    public function down()
    {
        $this->forge->dropTable('alumni_publikasi');
    }
}
