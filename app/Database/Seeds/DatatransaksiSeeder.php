<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\DatatransaksiModel;

class DatatransaksiSeeder extends Seeder
{
    public function run()
    {
        $pesananModel=new DatatransaksiModel();
        $pesananModel->save([
            'id_pesanan'=>1,
            'tanggal'=>"2023-09-18",

        ]);
    }
}
