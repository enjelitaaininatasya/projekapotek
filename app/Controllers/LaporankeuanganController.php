<?php

namespace App\Controllers;
use App\Models\LaporankeuanganModel;

use App\Controllers\BaseController;

class LaporankeuanganController extends BaseController
{
    public $laporankeuanganModel;
    public function indexPegawai()
    {
        $this->laporankeuanganModel = new LaporankeuanganModel();
        $data = [
            'laporann' => $this->laporankeuanganModel->getLaporan(),
        ];
        return view ("pegawai_laporankeuangan", $data);
    }

    public function indexAdmin()
    {
        $this->laporankeuanganModel = new LaporankeuanganModel();
        $data = [
            'laporann' => $this->laporankeuanganModel->getLaporan(),
        ];
        return view ("admin_laporankeuangan", $data);
    }

    public function createPegawai()
    {
        return view('pegawai_tambahlaporankeuangan');
    }

    public function createAdmin()
    {
        return view('admin_tambahlaporankeuangan');
    }

    public function storePegawai()
    {
        return view('pegawai_laporankeuangan');
    }

    public function storeAdmin()
    {
        $this->laporankeuanganModel = new LaporankeuanganModel();

        $this->laporankeuanganModel->saveLaporan([
            'tanggal'=>$this->request->getVar('tanggal'),
            'pemasukan'=>$this->request->getVar('pemasukan'),
            'total'=>$this->request->getVar('total'),
            
        ]);
        return redirect()->to(base_url('/admin/laporankeuangan'));
    }

    public function editAdmin($id)
    {
        $this->laporankeuanganModel= new LaporankeuanganModel();
        $data=[
            'laporan'=>$this->laporankeuanganModel->getLaporan($id),
        ];
        return view ('admin_editlaporan', $data);
    }

    public function updateAdmin($id)
    {
        $this->laporankeuanganModel= new LaporankeuanganModel();
        $data = [
            'tanggal' =>$this->request->getPost('tanggal'),
            'pemasukan' =>$this->request->getPost('pemasukan'),
            'total' =>$this->request->getPost('total'),
            
        ];

        $result = $this->laporankeuanganModel->updateLaporan($data,$id);
       

        if ($result){
            return redirect()->to('/admin/laporankeuangan');
        }
    }

    public function destroyAdmin ($id)
    {
        $this->laporankeuanganModel = new LaporankeuanganModel();
        $result = $this -> laporankeuanganModel->hapusLaporan($id);

        if ($result){
            return redirect()->to('/admin/laporankeuangan');
        }
    }
}
