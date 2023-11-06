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
            'nama_obat'=>'Promag',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);
        $obatModel->save([
            'nama_obat'=>'Promag',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);
        $obatModel->save([
            'nama_obat'=>'Promag',
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
            'nama_obat'=>'Promag',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);$obatModel->save([
            'nama_obat'=>'Promag',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);$obatModel->save([
            'nama_obat'=>'Promag',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);$obatModel->save([
            'nama_obat'=>'Promag',
            'tipe_obat'=>'Tablet',
            'harga_obat'=>'8000',
            'foto'=>'',
        ]);
    }
}
