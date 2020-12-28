<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Email extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'emailAlumni' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
        ]);

        $this->forge->addKey('emailAlumni', TRUE);
        $this->forge->addForeignKey('nim', 'alumni', 'nim', 'CASCADE', 'CASCADE');
        $this->forge->createTable('email');
    }

    public function down()
    {
        $this->forge->dropTable('email');
    }
}
