<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'cover', 'slug'];

    public function getBuku($slug = false)
    {
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    Public function search($search)
    {
        return $this->table('buku')->like('judul', $search);
    }
}