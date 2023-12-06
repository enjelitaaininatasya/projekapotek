<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\GroupModel;

class PegawaiController extends BaseController
{
    public $usersModel;
    public $groupModel;

    public function indexAdmin()
    {
        $this->usersModel = new UsersModel();
        $data=[
            'pegawaii'  =>  $this->usersModel->getPegawai(),
        ];

        return view('admin_pegawai', $data);
    }

    public function edit($id)
    {
        $this->usersModel = new UsersModel();

        $data= [
            'pegawai' => $this->usersModel->getPegawai($id),
        ];
        
        return view('admin_editpegawai', $data);
    }

    public function update($id)
    {
        $this->usersModel = new UsersModel();

        $data = [
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'umur' => $this->request->getPost('umur'),
            'telepon' => $this->request->getPost('telepon'),
        ];
    
        $result = $this->usersModel->updatePegawai($data, $id);

        if ($result) {
            return redirect()->to('/admin/pegawai');
        }
    }

    public function create()
    {
        return view('admin_tambahpegawai');
    }
    
    public function destroy($id)
    {   
        $this->usersModel = new UsersModel();
        $result = $this->usersModel->hapusPegawai($id);
        if ($result) {

        return redirect()->to('/admin/pegawai');
        }
    }

    public function turnPelanggan($id)
    {   
        $this->groupModel = new GroupModel();
        $this->groupModel->turnPelanggan($id);


        return redirect()->to('/admin/pegawai');
    }

   
}
