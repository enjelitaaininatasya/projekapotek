<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLaporankeuanganTable extends Migration
{
        public function up()
    {
        $this->forge->addField([
            'id_laporan'=>[
                'type'=>'INT',
                'constraint'=> 10,
                'unsigned'=> true,
                'auto_increment' => true,
            ],
            'tanggal'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',
               
            ],
            'pemasukan'=>[
                'type'=>'INT',
                'constraint'=>10,
            ],
            'total'=>[
                'type'=>'INT',
                'constraint'=>10,
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
        $this->forge->addKey('id_laporan', true);
        $this->forge->createTable('laporankeuangan');
    }

    public function down()
    {
        $this->forge->dropTable('laporankeuangan',true);
    }
}

