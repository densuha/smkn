<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table = 'pages';

    public function getAllPages()
    {
        return $this->select('url, updated_at')->findAll();
    }
}
