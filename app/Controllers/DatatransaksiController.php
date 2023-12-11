<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DatatransaksiModel;
use App\Models\PesananModel;

class DatatransaksiController extends BaseController
{
    public $datatransaksiModel;
    public $pesananModel;

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
        $this->pesananModel = new PesananModel();
        $data = $this->pesananModel->getPesanan();

        $data = [
            
            'data' => $data
        ];
        return view('pegawai_tambahdatatransaksi', $data);
    }

    public function createAdmin()
    {
        $this->pesananModel = new PesananModel();
        $data = $this->pesananModel->getPesanan();

        $data = [
            
            'data' => $data
        ];
        return view('admin_tambahdatatransaksi', $data);
    }

    public function storeAdmin()
    {
        $this->datatransaksiModel = new DatatransaksiModel();
        $this->pesananModel = new PesananModel();


        $this->datatransaksiModel->saveData([
            'id_pesanan'=>$this->request->getVar('idpesanan'),
            'tanggal'=>$this->request->getVar('tanggal'),
            
        ]);

        $id = $this->request->getVar('idpesanan');
        $this->pesananModel->completePesanan($id);


        return redirect()->to(base_url('/admin/datatransaksi'));
    }

    public function storePegawai()
    {
        $this->datatransaksiModel = new DatatransaksiModel();
        $this->pesananModel = new PesananModel();

        $idpesanan = $this->request->getVar('idpesanan');
        $tanggal = $this->request->getVar('tanggal');
       
        $data = [
            'id_pesanan' => $idpesanan,
            'tanggal' => $tanggal,
            
            ];

        $this->datatransaksiModel->saveData($data);

        $id = $this->request->getVar('idpesanan');
        $this->pesananModel->completePesanan($id);
        
        return redirect()->to(base_url('/pegawai/datatransaksi'));
    }

    public function editAdmin($id)
    {
        $this->datatransaksiModel= new DatatransaksiModel();
        $this->pesananModel = new PesananModel();
        $data=[
            'data'=>$this->datatransaksiModel->getData($id),
            'pesanan'=>$this->pesananModel->getPesanan(),
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

