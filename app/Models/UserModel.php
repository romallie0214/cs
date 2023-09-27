<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'tbluser';
    protected $primaryKey = 'id';
    protected $allowedFields = ['empno', 'lastname','firstname','middlename','userlevel'];
    protected $returnType     = 'object';
}