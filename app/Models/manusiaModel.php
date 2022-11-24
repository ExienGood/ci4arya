<?php

namespace App\Models;

use CodeIgniter\Model;

class manusiaModel extends Model
{
    protected $table ='manusia';

    public function getManusia($nama = false)
    {
        if($nama == false){
            return $this->findAll();
        }

        return $this->where(['nama' => $nama])->first();
    }
}