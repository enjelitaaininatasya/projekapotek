<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ObatModel;

class ObatSeeder extends Seeder
{
    public function run()
    {
        $obatModel=new ObatModel();
        $obatModel->save([
            'nama_obat'=>'Paracetamol',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);
        $obatModel->save([
            'nama_obat'=>'Amoxcillin',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'9000',
            'foto'=>'',
        ]);
        $obatModel->save([
            'nama_obat'=>'Darsi',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);
        $obatModel->save([
            'nama_obat'=>'Promag',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);$obatModel->save([
            'nama_obat'=>'Siclidon',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);$obatModel->save([
            'nama_obat'=>'Dohixat',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);$obatModel->save([
            'nama_obat'=>'Ambeven',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);$obatModel->save([
            'nama_obat'=>'UltraFlu',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);
    }
}
