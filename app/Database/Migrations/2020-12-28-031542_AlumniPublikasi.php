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

        // di pdf tulisannya gini 
        // FOREIGN KEY (nim) REFERENCES Alumni(nim) ON UPDATE CASCADE ON DELETE CASCADE
        // tolong koreksinya ya kalo ini salah
        $this->forge->addForeignKey('nim', 'alumni', 'nim', 'CASCADE', 'CASCADE');

        $this->forge->createTable('alumni_publikasi');
    }

    public function down()
    {
        $this->forge->dropTable('alumni_publikasi');
    }
}
