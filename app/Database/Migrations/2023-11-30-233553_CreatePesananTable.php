<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePesananTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_pesanan'=>[
            'type'=>'INT',
            'constraint'=>10,
            'unsigned'=> true,
            'auto_increment' => true,
        ],
        'id_user'=>[
            'type'=>'INT',
            'constraint'=>10,
            'unsigned'=> true,       
        ],
        'id_obat'=>[
            'type'=>'INT',
            'constraint'=>10,
            'unsigned'=> true,              
        ],
        'jumlah'=>[
            'type'=>'INT',
            'constraint'=>255,  
        ],
        'tanggal'=>[
            'type'=>'VARCHAR',
            'constraint'=>'255',
        ],
        'harga'=>[
            'type'=>'INT',
            'constraint'=>255,
        ],
        'status'=>[
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
    $this->forge->addKey('id_pesanan', true);
    $this->forge->addForeignKey('id_user', 'users', 'id');
    $this->forge->addForeignKey('id_obat', 'obat', 'id_obat');
    $this->forge->createTable('pesanan');
}

public function down()
{
    $this->forge->dropTable('pesanan',true);
}
}