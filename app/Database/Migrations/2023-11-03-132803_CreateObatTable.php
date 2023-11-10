<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateObatTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_obat'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=> true,
                'auto_increment' => true,
            ],
            'nama_obat'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',         
            ],
            'tipe_obat'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',              
            ],
            'harga_obat'=>[
                'type'=>'INT',
                'constraint'=>10,  
            ],
            'foto'=>[
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
        $this->forge->addKey('id_obat', true);
        $this->forge->createTable('obat');
    }

    public function down()
    {
        $this->forge->dropTable('obat',true);
    }
}
