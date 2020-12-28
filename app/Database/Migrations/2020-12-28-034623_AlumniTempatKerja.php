<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlumniTempatKerja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'idTempatKerja' => [
                'type' => 'BINARY',
                'constraint' => '16',
            ],
        ]);

        $this->forge->addKey('nim', TRUE);
        $this->forge->addKey('idTempatKerja', TRUE);
        // gives PRIMARY KEY `AlumniTempatKerja` (`nim`, 'idTempatKerja')
        $this->forge->addForeignKey('nim', 'alumni', 'nim', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('idTempatKerja', 'tempatKerja', 'idTempatKerja', 'CASCADE', 'CASCADE');
        $this->forge->createTable('alumniTempatKerja');
    }

    public function down()
    {
        $this->forge->dropTable('alumniTempatKerja');
    }
}
