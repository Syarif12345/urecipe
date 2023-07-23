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
    // Tampilkan halaman form tambah resep
    return view('admin/tambah_resep');
}

    //     public function store()
    // {
    //     $model = new ResepModel();

    //     $validation =  \Config\Services::validation();
    //     $validation->setRules([
    //         'nama_resep' => 'required',
    //         'deskripsi_resep' => 'required',
    //         'kategori' => 'required',
    //         'bahan' => 'required',
    //         'langkah' => 'required',
    //         'level' => 'required',
    //         'waktu' => 'required'
    //     ]);

    //     if ($validation->withRequest($this->request)->run()) {
    //         // Data valid, simpan ke database
    //         $data = [
    //             'nama_resep' => $this->request->getPost('nama_resep'),
    //             'deskripsi_resep' => $this->request->getPost('deskripsi_resep'),
    //             'kategori' => $this->request->getPost('kategori'),
    //             'bahan' => $this->request->getPost('bahan'),
    //             'langkah' => $this->request->getPost('langkah'),
    //             'level' => $this->request->getPost('level'),
    //             'waktu' => $this->request->getPost('waktu')
    //         ];

    //         $model->insert($data);
    //         return redirect()->to(base_url('admin/create'))->with('success', 'Resep berhasil ditambahkan');
    //     } else {
    //         // Data tidak valid, kembalikan ke form dengan pesan error
    //         return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    //     }
    // }

    public function store()
    {
        $model = new ResepModel();

            $data = [
                'nama_resep' => $this->request->getPost('nama_resep'),
                'deskripsi_resep' => $this->request->getPost('deskripsi_resep'),
                'kategori' => $this->request->getPost('kategori'),
                'bahan' => $this->request->getPost('bahan'),
                'langkah' => $this->request->getPost('langkah'),
                'level' => $this->request->getPost('level'),
                'waktu' => $this->request->getPost('waktu')
            ];

            $model->insert($data);
            if($model){
                return redirect()->to(base_url('admin/admin'));
            }else{
                return redirect()->to(base_url('admin/error'));
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

    public function daftar_menu()
    {
        $model = new ResepModel();
        $data['resep'] = $model->findAll();

        // Tampilkan halaman daftar_menu dengan data resep
        return view('admin/daftar_menu', $data);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home/login_view'))->with('success', 'Anda telah berhasil log out');
    }
}