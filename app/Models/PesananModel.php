<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table            = 'pesanan';
    protected $primaryKey       = 'id_pesanan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user','id_obat','jumlah','tanggal','harga','status'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getPesanan(){
        return $this->select('pesanan.id_pesanan, pesanan.harga, pesanan.tanggal, pesanan.status, pesanan.jumlah, obat.nama_obat, users.username')
        ->join('obat', 'obat.id_obat=pesanan.id_obat')
        ->join('users', 'users.id=pesanan.id_user')
        ->orderBy('pesanan.status', 'ASC')->findAll();    
    }

    public function savePesanan($data){
        $this->insert($data);   
    }

    public function completePesanan($id){
        $this->set('status', 'selesai')->where('id_pesanan', $id)->update();   
    }

    public function riwayatPesanan(){
        return $this->select('pesanan.id_pesanan, pesanan.harga, pesanan.tanggal, pesanan.status, pesanan.jumlah, obat.nama_obat, users.username')
        ->join('obat', 'obat.id_obat=pesanan.id_obat')
        ->join('users', 'users.id=pesanan.id_user')
        ->where('id_user', user_id())->findAll();  
    }
}
