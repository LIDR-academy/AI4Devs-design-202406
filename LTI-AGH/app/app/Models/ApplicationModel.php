<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicationModel extends Model
{
    protected $table = 'applications';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'job_post_id', 'phase'];
}