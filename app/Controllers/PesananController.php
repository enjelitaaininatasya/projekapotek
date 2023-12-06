<?php

namespace App\Controllers;
use App\Models\PesananModel;
use App\Models\ObatModel;
use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class PesananController extends BaseController
{
    public $obatModel;
    public $pesananModel;

    public function __construct(){
        $this->obatModel = new ObatModel();
        $this->pesananModel = new PesananModel();
    }
    public function create()
    {
        $obat = $this->obatModel->getObat();
        $data = [
            'obat' => $obat,
        ];
        return view('pelanggan_tambahpesanan', $data);
    }
    
    public function konfirmasi()
    {
        
        $id = $this->request->getPost('id_obat');
        $obat = $this->obatModel->getObat($id);

        $tanggalSekarang = Time::now();
        $formatTanggal = $tanggalSekarang->toLocalizedString('dd-MM-yyyy');

        $data = [
            'obat' => $obat,
            'jumlah' => $this->request->getPost('jumlah_obat'),
            'date' => $formatTanggal,
        ];
        return view('pelanggan_konfirmasipesanan',$data);
    }

    public function pesanan()
    {
        $id_user = user_id();
        $tanggalSekarang = Time::now();
        $formatTanggal = $tanggalSekarang->toLocalizedString('dd-MM-yyyy');
        
        $this->pesananModel->savePesanan([
            'id_user' => $id_user,
            'id_obat' => $this->request->getVar('id_obat'),
            'jumlah' => $this->request->getVar('jumlah'),
            'tanggal' =>  $formatTanggal, 
            'harga' =>  $this->request->getVar('harga'), 
            'status' =>  $this->request->getVar('status'),        
        ]);

        return redirect()->to(base_url('/pelanggan/aboutus'));
    }

    
    public function indexAdmin()
    {
  
        $data = [
            'pesanann' => $this->pesananModel->getPesanan(),
        ];
        return view ("admin_pesanan", $data);
    }

    public function indexPegawai()
    {

        $this->pesananModel = new PesananModel();
        $data = [
            'pesanann' => $this->pesananModel->getPesanan(),
        ];
        return view ("pegawai_pesanan", $data);
    }

    public function riwayat()
    {
        $this->pesananModel = new PesananModel();
        $data = [
            'riwayatt' => $this->pesananModel->riwayatPesanan(),
        ];
        return view ("pelanggan_riwayat", $data);
    }

    public function completeAdmin($id)
    {
        $this->pesananModel = new PesananModel();
        $this->pesananModel->completePesanan($id);
    
        return redirect()->to(base_url('/admin/pesanan'));
    }

}
