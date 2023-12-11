<?php

namespace App\Models;

use CodeIgniter\Model;

class DatatransaksiModel extends Model
{
    protected $table            = 'datatransaksi';
    protected $primaryKey       = 'id_datatransaksi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pesanan', 'tanggal'];

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


    public function saveData($data){
        $this->insert($data);
    }

    public function getData($id = null){
        if($id==!null){
            return $this->select('datatransaksi.*, pesanan.jumlah, pesanan.harga, obat.*, users.*')
        ->join('pesanan', 'pesanan.id_pesanan=datatransaksi.id_pesanan')
        ->join('obat', 'obat.id_obat=pesanan.id_obat')
        ->join('users', 'users.id=pesanan.id_user')->find($id); 
        }
        return $this->select('datatransaksi.*, pesanan.jumlah, pesanan.harga, obat.*, users.*')
        ->join('pesanan', 'pesanan.id_pesanan=datatransaksi.id_pesanan')
        ->join('obat', 'obat.id_obat=pesanan.id_obat')
        ->join('users', 'users.id=pesanan.id_user')
        ->orderBy('id_datatransaksi', 'ASC')->findAll(); 
    }

    public function updateData($data, $id){
        return $this->update($id, $data);
    }

    public function hapusData($id)
    {
         return $this->delete($id);
    }
}

