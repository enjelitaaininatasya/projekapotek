<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email','username','umur','telepon'];

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


    public function getPegawai($id = null){
        if($id==!null){
            return $this->select(' users.*')
            ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
            ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
            ->where('group_id', '2')->find($id);  
        }
        return $this->select(' users.*')
        ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
        ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
        ->where('group_id', '2')->findAll();  
    }

    public function getPelanggan($id = null){
        if($id==!null){
            return $this->select(' users.*')
            ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
            ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
            ->where('group_id', '3')->find($id);  
        }
        return $this->select(' users.*')
        ->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
        ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
        ->where('group_id', '3')->findAll();  
    }

    public function updatePegawai($data, $id){
        return $this->update($id, $data);
    }

    public function updatePelanggan($data, $id){
        return $this->update($id, $data);
    }

    public function hapusPegawai($id)
    {
         return $this->delete($id);
    }

    public function hapusPelanggan($id)
    {
         return $this->delete($id);
    }
}
