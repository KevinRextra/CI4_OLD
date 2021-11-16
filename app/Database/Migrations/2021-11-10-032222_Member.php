<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class Member extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => '255'
            ],
            'alamat' => [
                'type' => 'text'
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null'=> true
            ]
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('member');
    }

    public function down()
    {
        $this->forge->dropTable('member');
    }
}
