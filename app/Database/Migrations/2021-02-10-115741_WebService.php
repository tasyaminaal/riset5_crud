<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WebService extends Migration
{
	public function up()
	{
        //--------------------------------------------
        //Table token_app
        $this->forge->addField([
            
            'id'          => [
                'type'           => 'int', 
                'constraint'     => 11, 
                'unsigned'       => true, 
                'auto_increment' => true
            ],

            'token'       => [
                'type'       => 'varchar',
                'constraint' => 30,
                'null'       => true
            ],

            'count_usage' => [
                'type'       => 'int',
                'constraint' => 11,
                'default'    => 0
            ],

            'last_access' => [
                'type' => 'datetime',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('token');

        $this->forge->createTable('token_app', true);


        //--------------------------------------------
        //Table scope_app
        $this->forge->addField([
            
            'id'          => [
                'type'           => 'int', 
                'constraint'     => 11, 
                'unsigned'       => true, 
                'auto_increment' => true
            ],

            'scope'       => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true
            ],

            'scope_dev'       => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('scope_app', true);

        //--------------------------------------------
        //Table token_scope

        $this->forge->addField([
            'id'          => [
                'type'           => 'int', 
                'constraint'     => 11, 
                'unsigned'       => true, 
                'auto_increment' => true
            ],
            
            'id_token'          => [
                'type'           => 'int', 
                'constraint'     => 11,
                'unsigned'       => true,     
            ],

            'id_scope'          => [
                'type'           => 'int', 
                'constraint'     => 11,
                'unsigned'       => true,     
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'id_token', 
            'token_app', 
            'id', 
            'CASCADE', 
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'id_scope', 
            'scope_app', 
            'id', 
            'CASCADE', 
            'CASCADE'
        );

        $this->forge->createTable('token_scope', true);

        //--------------------------------------------
        //Table client_app
        $this->forge->addField([
            'id'          => [
                'type'           => 'int', 
                'constraint'     => 11, 
                'unsigned'       => true, 
                'auto_increment' => true
            ],

            'uid'          => [
                'type'           => 'int', 
                'constraint'     => 11,
                'null'           => true,     
                'unsigned'       => true,
            ],

            'nama_app'     => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],

            'deskripsi'     => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],

            'status'     => [
                'type'       => 'enum',
                'constraint' => [
                    'Review',
                    'Diterima',
                    'Ditolak'
                ],
                'default' => 'Review'
            ],

            'req_date'     => [
                'type'       => 'datetime',
                'null'       => true,
            ],

            'req_acc'     => [
                'type'       => 'datetime',
                'null'       => true,
            ],

            'uid_admin' => [
                'type'           => 'int', 
                'constraint'     => 11,
                'null'           => true,
                'unsigned'       => true,     
            ],

            'id_token' => [
                'type'           => 'int', 
                'constraint'     => 11,
                'null'           => true,
                'unsigned'       => true,     
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'uid',
            'users',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'uid_admin',
            'users',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'id_token',
            'token_app',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->forge->createTable('client_app', true);
    }

    public function down()
    {

    }
}