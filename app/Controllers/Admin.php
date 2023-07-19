<?php
namespace App\Controllers;
use App\Models\ResepModel;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function admin()
    {
        $model = new ResepModel();
        $data['resep'] = $model->findAll(); // Mengambil semua data resep dari tabel
        return view('admin', $data);
    }
    
    public function create()
    {
        return view('admin/admin');
    }

    public function store()
    {
        $model = new ResepModel();
        
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_resep' => 'required',
            'deskripsi_resep' => 'required',
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        if ($validation->withRequest($this->request)->run()) {
            // Data valid, simpan ke database
            $model->insert($this->request->getPost());
            return redirect()->to(base_url('admin'))->with('success', 'Resep berhasil ditambahkan');
        } else {
            // Data tidak valid, kembalikan ke form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    }

    public function edit($id)
    {
        $model = new ResepModel();
        $data['resep'] = $model->find($id); // Mengambil data resep berdasarkan id
        return view('admin/edit', $data);
    }
    public function update($id)
    {
        $model = new ResepModel();

        // Validasi data yang diinput dari form
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_resep' => 'required',
            'deskripsi_resep' => 'required',
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        if ($validation->withRequest($this->request)->run()) {
            // Data valid, update data di database
            $model->update($id, $this->request->getPost());
            return redirect()->to(base_url('admin'))->with('success', 'Resep berhasil diperbarui');
        } else {
            // Data tidak valid, kembalikan ke form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    }

    public function destroy($id)
    {
        $model = new ResepModel();
        $model->delete($id); // Menghapus data resep berdasarkan id
        return redirect()->to(base_url('admin'))->with('success', 'Resep berhasil dihapus');
    }
}