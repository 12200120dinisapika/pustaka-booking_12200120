<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna12200120 extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id'=>[
                 'type'           =>'INT','constraint' => 4,
                 'unsigned'       => true,
                 'auto_increment' => true
            ],
            'nama'=>[
                'type'             =>'VARCHAR','constraint'=> 50,
                'null'             => false
            ],
            'password'=>[          
                'type'             =>'VARCHAR','constraint'=> 32,  
                'null'             => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengguna_12200120');
    }

    public function down()
    {
        $this->forge->dropTable('pengguna_12200120');
    }
}
