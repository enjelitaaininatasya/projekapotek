<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\PesananModel;

class PesananSeeder extends Seeder
{
    public function run()
    {
        $pesananModel=new PesananModel();
        $pesananModel->save([
            'id_user'=>1,
            'id_obat'=>1,
            'jumlah'=>1,
            'tanggal'=>"2023-09-18",
            'harga'=>"8000",
            'status'=>"selesai"

        ]);
    }
}
