<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=> true,
                'auto_increment' => true,
            ],
            'nama'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',
               
            ],
            'katasandi'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',
               
            ],
            'umur'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=> true,
                
            ],
            'telepon'=>[
                'type'=>'VARCHAR',
                'constraint'=> '255',
            ],
            'role'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',
            ],
            'created_at' => [
                'type'=>'DATETIME',
                'null'=> true,
            ],
            'updated_at' => [
                'type'=>'DATETIME',
                'null'=> true,
            ],
            'deleted_at' => [
                'type'=>'DATETIME',
                'null'=> true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user',true);
    }
}
