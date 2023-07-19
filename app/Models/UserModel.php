<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_user', 'username', 'password', 'nama', 'level'];
}