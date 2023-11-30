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
        $this->laporankeuanganModel = new LaporankeuanganModel();
        $data = $this->laporankeuanganModel->getLaporan();

        $data = [
            'laporan' => $data
        ];
        return view('pegawai_tambahlaporankeuangan', $data);
    }

    public function createAdmin()
    {
        $this->laporankeuanganModel = new LaporankeuanganModel();
        $data = $this->laporankeuanganModel->getLaporan();

        $data = [
            'laporan' => $data
        ];
        return view('admin_tambahlaporankeuangan', $data);
    }

    public function storePegawai()
    {
        $this->laporankeuanganModel = new LaporankeuanganModel();

        $tanggal = $this->request->getVar('tanggal');
        $pemasukan = $this->request->getVar('pemasukan');
        $total = $this->request->getVar('total');

        if (!$pemasukan || !is_numeric($pemasukan)) {
        $pemasukan = 0;
        }

        if (!$total || !is_numeric($total)) {
        $total = 0;
        }

        $data = [
        'tanggal' => $tanggal,
        'pemasukan' => $pemasukan,
        'total' => $total,
        ];

        $this->laporankeuanganModel->saveLaporan($data);
        $data = [
            'laporann' => $this->laporankeuanganModel->getLaporan(),
        ];

        return view('pegawai_laporankeuangan', $data);
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
