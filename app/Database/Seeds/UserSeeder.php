<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel=new UserModel();
        $userModel->save([
            'nama'=>'Enjel',
            'katasandi'=>'1234',
            'umur'=>'20',
            'telepon'=>'081278905678',
            'role'=>'admin',
        ]);
        $userModel->save([
            'nama'=>'Kinan',
            'katasandi'=>'123',
            'umur'=>'20',
            'telepon'=>'083199087657',
            'role'=>'pegawai',
        ]);
        $userModel->save([
            'nama'=>'Wendi',
            'katasandi'=>'12345',
            'umur'=>'22',
            'telepon'=>'081390679938',
            'role'=>'pelanggan',
        ]);
    }
}
