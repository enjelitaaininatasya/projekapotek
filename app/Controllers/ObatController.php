<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatModel;

class ObatController extends BaseController
{
    public $obatModel;
    

    public function _contruct()
    {
        $this->obatModel = new ObatModel();
       
    }

    public function indexPelanggan()
    {

        $this->obatModel = new ObatModel();
        $data = [
            'obats' => $this->obatModel->getObat(),
        ];
        return view ("pelanggan_obat", $data);
    }

    public function indexAdmin()
    {

        $this->obatModel = new ObatModel();
        $data = [
            'obats' => $this->obatModel->getObat(),
        ];
        return view ("admin_obat", $data);
    }

    public function createAdmin()
    {
        $this->obatModel = new ObatModel();
        $obat = $this->obatModel->getObat();

        $data = [
            
            'obat' => $obat,
            'validation' => \Config\Services::validation()
        ];
        return view('admin_tambahobat', $data);
    }

    public function edit($id)
    {
            $this->obatModel = new ObatModel();
            $obat = $this->obatModel->getObat($id);


            $data = [
                'obat'  => $obat,
                'validation' => \Config\Services::validation(),
            ];

        return view('admin_editobat', $data);
        
    }

    public function update($id){

        $this->obatModel = new ObatModel();
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
    
        $data = [
            'nama_obat' => $this->request->getVar('nama'),
            'tipe_obat' => $this->request->getVar('tipe_obat'),
            'harga_obat' => $this->request->getVar('harga'),
        ];
    
        if ($foto->isValid()) {
            $name = $foto->getRandomName();
    
            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);
                $data['foto'] = $foto_path;   
            }
        }
        
        $result = $this->obatModel->updateObat($data, $id);
    
        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal menyimpan data');
        }
        return redirect()->to(base_url('/admin/obat'));
    }
    

    public function stores()
    {
        $this->obatModel = new ObatModel();
        $validationRules = [
            'nama_obat' => 'required',
            'tipe_obat' => 'required',
            'harga_obat' => 'required|numeric',
            'foto' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if (!$foto->move($path, $name)) {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah gambar obat');
        }

        
        $fotoPath = base_url($path . $name);

        $data = [
            'nama_obat' => $this->request->getVar('nama_obat'),
            'tipe_obat' => $this->request->getVar('tipe_obat'),
            'harga_obat' => $this->request->getVar('harga_obat'),
            'foto' => $fotoPath
        ];

        $this->obatModel->saveObat($data);

        return redirect()->to('/admin/obat')->with('success', 'Data obat berhasil ditambahkan');
    }



    public function delete($id){

        $this->obatModel = new ObatModel();
        $result = $this->obatModel->deleteObat($id);
    
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus dta');    
        }
        return redirect()->to(base_url('/admin/obat'))
       ->with('success', 'Berhasil menghapus data');
    }

    public function indexPegawai()
    {

        $this->obatModel = new ObatModel();
        $data = [
            'obats' => $this->obatModel->getObat(),
        ];
        return view ("pegawai_obat", $data);
    }

    public function createPegawai()
    {
        
        $this->obatModel = new ObatModel();
        $obat = $this->obatModel->getObat();

        $data = [
            
            'obat' => $obat,
            'validation' => \Config\Services::validation()
        ];
        return view('pegawai_tambahobat', $data);
    }

    public function editPegawai($id)
    {
            $this->obatModel = new ObatModel();
            $obat = $this->obatModel->getObat($id);


            $data = [
                'obat'  => $obat,
                'validation' => \Config\Services::validation()
            ];

        return view('pegawai_editobat', $data);
        
    }

    public function updatePegawai($id){

        $this->obatModel = new ObatModel();
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
    
        $data = [
            'nama_obat' => $this->request->getVar('nama'),
            'tipe_obat' => $this->request->getVar('tipe_obat'),
            'harga_obat' => $this->request->getVar('harga'),
        ];
    
        if ($foto->isValid()) {
            $name = $foto->getRandomName();
    
            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);
                $data['foto'] = $foto_path;   
            }
        }
        
        $result = $this->obatModel->updateObat($data, $id);
    
        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal menyimpan data');
        }
        return redirect()->to(base_url('/pegawai/obat'));
    }

    public function store()
    {
        $this->obatModel = new ObatModel();
        $validationRules = [
            'nama_obat' => 'required',
            'tipe_obat' => 'required',
            'harga_obat' => 'required|numeric',
            'foto' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if (!$foto->move($path, $name)) {
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah gambar obat');
        }

        
        $fotoPath = base_url($path . $name);

        $data = [
            'nama_obat' => $this->request->getVar('nama_obat'),
            'tipe_obat' => $this->request->getVar('tipe_obat'),
            'harga_obat' => $this->request->getVar('harga_obat'),
            'foto' => $fotoPath
        ];

        $this->obatModel->saveObat($data);

        return redirect()->to('/pegawai/obat')->with('success', 'Data obat berhasil ditambahkan');
    }


    public function destroy($id){

        $this->obatModel = new ObatModel();
        $result = $this->obatModel->deleteObat($id);
    
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus dta');    
        }
        return redirect()->to(base_url('/pegawai/obat'))
       ->with('success', 'Berhasil menghapus data');
    }
}
