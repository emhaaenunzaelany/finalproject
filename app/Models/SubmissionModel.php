<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmissionModel extends Model
{
    protected $table = 'submissions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'title', 'description', 'status', 'created_at'];
}
