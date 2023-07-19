<?php

namespace App\Controllers;
use App\Models\ResepModel;
use CodeIgniter\Session\Session;

class Home extends BaseController
{
    protected $session;
    protected $db;

    public function __construct(){
        $this->session = session();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view('home');
    }

    public function kue()
    {
    $model = new ResepModel();
    $kategoriTertentu = 'Kue'; // Replace with the desired category

    $data['resep'] = $model->where('kategori', $kategoriTertentu)->findAll();
    return view('kue', $data);
    }

    public function makanan()
    {
    $model = new ResepModel();
    $kategoriTertentu = 'Makanan'; // Replace with the desired category

    $data['resep'] = $model->where('kategori', $kategoriTertentu)->findAll();
    return view('makanan', $data);
    }

    public function minuman()
    {
    $model = new ResepModel();
    $kategoriTertentu = 'Minuman'; // Replace with the desired category

    $data['resep'] = $model->where('kategori', $kategoriTertentu)->findAll();
    return view('minuman', $data);
    }

    public function about()
    {
        return view('about');
    }

    public function detail_makanan()
    {   
        $model = new ResepModel();
        
        $request = service('request');
        $id = $request->getGet('id'); // Use getGet() instead of getVar()

        $data['resep'] = $model->where('id_resep', $id)->findAll();

        return view('detail_makanan', $data);
    }
    
}
