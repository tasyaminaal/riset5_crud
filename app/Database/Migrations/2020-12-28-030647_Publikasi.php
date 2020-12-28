<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Publikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPublikasi' => [
                'type' => 'BINARY',
                'constraint' => '16',
            ],
            'topik' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'publisher' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'tanggalDisahkan' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('idPublikasi', TRUE);
        $this->forge->createTable('publikasi');
    }

    public function down()
    {
        $this->forge->dropTable('publikasi');
    }
}
