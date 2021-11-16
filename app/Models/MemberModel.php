<?php

namespace App\Models;

use CodeIgniter\Model;


class MemberModel extends Model
{
    protected $table = 'member';
    protected $useTimestamp = True;

    Public function search($search)
    {
        return $this->table('member')->like('nama', $search)->orlike('alamat',$search)->orlike('updated_at',$search)->orlike('created_at',$search);
    }
}


