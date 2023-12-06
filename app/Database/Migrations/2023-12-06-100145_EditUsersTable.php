<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EditUsersTable extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('users', [
            'telepon' => [
                'type' => 'VARCHAR',
                'constraint' => '255' // Sesuaikan constraint dengan kebutuhan Anda
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
