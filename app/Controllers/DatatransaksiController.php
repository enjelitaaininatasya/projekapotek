<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DatatransaksiModel;

class DatatransaksiController extends BaseController
{
    public $datatransaksiModel;

    public function indexAdmin()
    {

        $this->datatransaksiModel = new DatatransaksiModel();
        $data = [
            'dataa' => $this->datatransaksiModel->getData(),
        ];
        return view ("admin_datatransaksi", $data);
    }

    public function indexPegawai()
    {

        $this->datatransaksiModel = new DatatransaksiModel();
        $data = [
            'dataa' => $this->datatransaksiModel->getData(),
        ];
        return view ("pegawai_datatransaksi", $data);
    }

    public function createPegawai()
    {
        $this->datatransaksiModel = new DatatransaksiModel();
        $data = $this->datatransaksiModel->getData();

        $data = [
            
            'data' => $data
        ];
        return view('pegawai_tambahdatatransaksi', $data);
    }

    public function createAdmin()
    {
        return view('admin_tambahdatatransaksi');
    }

    public function storeAdmin()
    {
        $this->datatransaksiModel = new DatatransaksiModel();

        $this->datatransaksiModel->saveData([
            'id_pesanan'=>$this->request->getVar('idpesanan'),
            'tanggal'=>$this->request->getVar('tanggal'),
            
        ]);
        return redirect()->to(base_url('/admin/datatransaksi'));
    }

    public function storePegawai()
    {
        $this->datatransaksiModel = new DatatransaksiModel();

        $idpesanan = $this->request->getVar('idpesanan');
        $tanggal = $this->request->getVar('tanggal');
       
        $data = [
            'idpesanan' => $idpesanan,
            'tanggal' => $tanggal,
            
            ];

        $this->datatransaksiModel->saveData($data);
        $data = [
            'dataa' => $this->datatransaksiModel->getData(),
        ];
        return redirect()->to(base_url('/pegawai/datatransaksi', $data));
    }

    public function editAdmin($id)
    {
        $this->datatransaksiModel= new DatatransaksiModel();
        $data=[
            'data'=>$this->datatransaksiModel->getData($id),
        ];
        return view ('admin_editdatatransaksi', $data);
    }

    public function updateAdmin($id)
    {
        $this->datatransaksiModel= new DatatransaksiModel();
        $data = [
            'id_pesanan' =>$this->request->getPost('idpesanan'),
            'tanggal' =>$this->request->getPost('tanggal'),
        ];

        $result = $this->datatransaksiModel->updateData($data,$id);
       

        if ($result){
            return redirect()->to('/admin/datatransaksi');
        }
    }

    public function destroyAdmin ($id)
    {
        $this->datatransaksiModel = new DatatransaksiModel();
        $result = $this -> datatransaksiModel->hapusData($id);

        if ($result){
            return redirect()->to('/admin/datatransaksi');
        }
    }
}

