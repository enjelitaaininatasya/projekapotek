<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\GroupModel;

use App\Controllers\BaseController;

class PelangganController extends BaseController
{
    public $usersModel;
    public $groupModel;

    public function indexPegawai()
    {

        $this->usersModel = new UsersModel();
        $data = [
            'pelanggann' => $this->usersModel->getPelanggan(),
        ];
        return view ("pegawai_pelanggan", $data);
    }

    public function indexAdmin()
    {

        $this->usersModel = new UsersModel();
        $data = [
            'pelanggann' => $this->usersModel->getPelanggan(),
        ];
        return view ("admin_pelanggan", $data);
    }

    public function edit($id)
    {
        $this->usersModel= new UsersModel();
        $data=[
            'pelanggan'=>$this->usersModel->getPelanggan($id),
        ];
        return view ('admin_editpelanggan', $data);
    }

    public function update($id)
    {
        $this->usersModel= new UsersModel();
        $data = [
            'email' =>$this->request->getPost('email'),
            'username' =>$this->request->getPost('username'),
            'umur' =>$this->request->getPost('umur'),
            'telepon' =>$this->request->getPost('telepon'),
        ];

        $result = $this->usersModel->updatePelanggan($data,$id);
       

        if ($result){
            return redirect()->to('/admin/pelanggan');
        }
    }

    public function turnPegawai($id)
    {   
        $this->groupModel = new GroupModel();
        $result = $this->groupModel->turnPegawai($id);
        if ($result) {

        return redirect()->to('/admin/pegawai');
        }
    }

    public function destroy ($id)
    {
        $this->usersModel = new UsersModel();
        $result = $this -> usersModel->hapusPelanggan($id);

        if ($result){
            return redirect()->to('/admin/pelanggan');
        }
    }
}