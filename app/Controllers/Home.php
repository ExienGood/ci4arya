<?php

namespace App\Controllers;

use App\Models\manusiaModel;

class Home extends BaseController
{
    protected $manusiaModel;

    public function __construct()
    {
        $this->manusiaModel = new manusiaModel();
    }
    
    public function index()
    {
        

        $data = [
            'title' => 'Home',
            'manusia' => $this->manusiaModel->getManusia()
        ];
       
        return view('beranda', $data);
    }

    public function detail($nama)
    {
        $data = [
            'title' => 'Detail Manusia',
            'manusia' => $this->manusiaModel->getManusia($nama)
        ];
        return view('detail', $data);
    }

}
