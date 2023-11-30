<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporankeuanganModel extends Model
{
    protected $table            = 'laporankeuangan';
    protected $primaryKey       = 'id_laporan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal','pemasukan','total'];

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

    public function getLaporan($id = null){
        if ($id != null)
        {
            return $this->find($id);
        }
        return $this->findAll(); 
    }

    public function saveLaporan($data)
    {
        $this->insert($data);
    }

    public function updateLaporan($data, $id)
    {
        return $this->update($id, $data);
    }

    public function hapusLaporan($id)
    {
         return $this->delete($id);
    }
}
