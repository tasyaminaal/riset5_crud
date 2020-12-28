<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Author extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'idPublikasi' => [
                'type' => 'BINARY',
                'constraint' => '16',
            ],
        ]);

        $this->forge->addKey('author', TRUE);

        // di pdf tulisannya gini
        // FOREIGN KEY (idPublikasi) REFERENCES Publikasi(idPublikasi) ON UPDATE ON CASCADE ON DELETE CASCADE
        $this->forge->addForeignKey('idPulikasi', 'publikasi', 'idPulikasi', 'CASCADE', 'CASCADE');

        $this->forge->createTable('author');
    }

    public function down()
    {
        $this->forge->dropTable('author');
    }
}
