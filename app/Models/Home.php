<?php

namespace App\Models;

use CodeIgniter\Model;

class Home extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'firstname',
        'lastname',
        'middlename',
        'password',
        'gender',
        'is_verified',
        'image_path',
        'created_at',
    ];
}
