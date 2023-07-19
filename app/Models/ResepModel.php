<?php
namespace App\Models;
use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table      = 'resep';
    protected $primaryKey = 'id_resep';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama_resep', 'deskripsi_resep', 'kategori', 'bahan', 'langkah', 'level', 'waktu'];
    protected $useTimestamps = false;
}