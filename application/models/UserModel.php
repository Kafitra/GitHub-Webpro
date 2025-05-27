<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'data_pengguna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email'];
}
