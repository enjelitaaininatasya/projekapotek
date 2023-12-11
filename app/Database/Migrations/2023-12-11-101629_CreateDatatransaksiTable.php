<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDatatransaksiTable extends Migration
{
    public function up()
    {
    $this->forge->addField([
        'id_datatransaksi'=>[
            'type'=>'INT',
            'constraint'=>10,
            'unsigned'=> true,
            'auto_increment' => true,
        ],
        'id_pesanan'=>[
            'type'=>'INT',
            'constraint'=>10,
            'unsigned'=> true,       
        
        ],
        'tanggal'=>[
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
    $this->forge->addKey('id_datatransaksi', true);
    $this->forge->addForeignKey('id_pesanan', 'pesanan', 'id_pesanan', 'CASCADE', 'CASCADE');
    $this->forge->createTable('datatransaksi');
}

public function down()
{
    $this->forge->dropTable('datatransaksi',true);
}
}