<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendidikan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPendidikan' => [
                'type' => 'BINARY',
                'constraint' => '16',
            ],
            'jenjang' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
            ],
            'universitas' => [
                'type' => 'VARCHAR',
                'constraint' => '16',
            ],
            'programStudi' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tahunLulus' => [
                'type' => 'YEAR',
            ],
            'tahunMasuk' => [
                'type' => 'YEAR',
            ],
            'judulTulisan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
        ]);

        $this->forge->addKey('idPendidikan', TRUE);
        $this->forge->addForeignKey('nim', 'alumni', 'nim', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pendidikan');
    }

    public function down()
    {
        $this->forge->dropTable('pendidikan');
    }
}
