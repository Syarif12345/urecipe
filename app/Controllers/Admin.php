<?php
namespace App\Controllers;
use App\Models\ResepModel;
use CodeIgniter\Controller;

class Admin extends BaseController
{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function admin()
    {
        $model = new ResepModel();
        $data['resep'] = $model->findAll(); // Mengambil semua data resep dari tabel
        return view('admin', $data);
    }

    // public function edit_resep()
    // {
    //     $model = new ResepModel();

    //     // Get the 'id' parameter from the query string
    //     $id_resep = $this->request->getGet('id');

    //     // Check if the 'id' parameter exists and is numeric
    //     if ($id_resep !== null && is_numeric($id_resep)) {
    //         // Find the resep by its id_resep
    //         $resep = $model->find($id_resep);

    //         // Check if the resep is found
    //         if ($resep) {
    //             $data['resep'] = $resep;
    //             return view('edit_resep', $data);
    //         } else {
    //             // If the resep with the provided ID is not found, you can handle the error accordingly.
    //             // For example, you can redirect to an error page or show an error message.
    //             return redirect()->to(base_url('error_page'));
    //         }
    //     } else {
    //         // If the 'id' parameter is not provided or is invalid, you can handle the error accordingly.
    //         // For example, you can redirect to an error page or show an error message.
    //         return redirect()->to(base_url('error_page'));
    //     }
    // }

    public function proses_edit()
    {
        // Check if the request is a POST request
        if ($this->request->getMethod() === 'post') {
            // Get the form data
            $id_resep = $this->request->getPost('id_resep');
            $nama_resep = $this->request->getPost('nama_resep');
            $deskripsi_resep = $this->request->getPost('deskripsi_resep');
            $kategori = $this->request->getPost('kategori');
            $bahan = $this->request->getPost('bahan');
            $langkah = $this->request->getPost('langkah');
            $level = $this->request->getPost('level');
            $waktu = $this->request->getPost('waktu');
    
            // Load the ResepModel
            $model = new ResepModel();
    
            // Check if the resep exists in the database
            $existingResep = $model->find($id_resep);
            if (!$existingResep) {
                // If the resep doesn't exist, you can handle the error accordingly.
                // For example, you can redirect to an error page or show an error message.
                return redirect()->to(base_url('error_page'));
            }
    
            // Update the resep data in the database
            $data = [
                'nama_resep' => $nama_resep,
                'deskripsi_resep' => $deskripsi_resep,
                'kategori' => $kategori,
                'bahan' => $bahan,
                'langkah' => $langkah,
                'level' => $level,
                'waktu' => $waktu,
            ];
    
            // Update the resep data using the model
            $model->update($id_resep, $data);
    
            // Redirect back to the edit page or any other page you want
            return redirect()->to(base_url('admin/daftar_menu'));
        } else {
            // If it's not a POST request, you can handle the error accordingly.
            // For example, you can redirect to an error page or show an error message.
            return redirect()->to(base_url('error_page'));
        }
    }
    

    public function edit_resep()
{
    $model = new ResepModel();

    // Get the 'id' parameter from the query string
    $id_resep = $this->request->getGet('id');

    // Check if the 'id' parameter exists and is numeric
    if ($id_resep !== null && is_numeric($id_resep)) {
        // Find the resep by its id_resep
        $resep = $model->find($id_resep);

        // Check if the resep is found
        if ($resep) {
            $data['resep'] = $resep;
            return view('edit_resep', $data);
        } else {
            // If the resep with the provided ID is not found, you can handle the error accordingly.
            // For example, you can redirect to an error page or show an error message.
            return redirect()->to(base_url('error_page'));
        }
    } else {
        // If the 'id' parameter is not provided or is invalid, you can handle the error accordingly.
        // For example, you can redirect to an error page or show an error message.
        return redirect()->to(base_url('error_page'));
    }
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

    public function deleteResep()
    {
        $resepModel = new ResepModel();

        // Get the ID of the resep to be deleted from the query string
        $id_resep = $this->request->getGet('id');

        // Check if the ID exists and is valid
        if ($id_resep) {
            // Find the resep in the database
            $resep = $resepModel->find($id_resep);

            // If the resep is found, delete it
            if ($resep) {
                $resepModel->delete($id_resep);

                // Optionally, you can add a flash message to show a success message to the user
                $this->session->setFlashdata('success', 'Resep deleted successfully.');
            } else {
                // If the resep with the provided ID is not found, show an error message
                $this->session->setFlashdata('error', 'Resep not found.');
            }
        } else {
            // If no ID is provided, show an error message
            $this->session->setFlashdata('error', 'Invalid request.');
        }

        // Redirect back to the view page where you listed the reseps
        return redirect()->to(base_url('admin/daftar_menu'));
    }

    public function destroy($id)
    {
        $model = new ResepModel();
        $model->delete($id); // Menghapus data resep berdasarkan id
        return redirect()->to(base_url('admin/daftar_menu'))->with('success', 'Resep berhasil dihapus');
    }

    public function daftar_menu()
    {
        $model = new ResepModel();
        $data['resep'] = $model->findAll();

        // Tampilkan halaman daftar_menu dengan data resep
        return view('daftar_menu', $data);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home/login_view'))->with('success', 'Anda telah berhasil log out');
    }
}