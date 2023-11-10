<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\LaporankeuanganModel;

class LaporankeuanganSeeder extends Seeder
{
    public function run()
    {
        $laporankeuanganModel=new LaporankeuanganModel();
        $laporankeuanganModel->save([
            'tanggal'=>'2023-09-18',
            'pemasukan'=>'500000',
            'total'=>'500000',
        ]);
        $laporankeuanganModel->save([
            'tanggal'=>'2023-09-19',
            'pemasukan'=>'100000',
            'total'=>'600000',
        ]);
    }
}
