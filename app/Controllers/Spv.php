<?php

namespace App\Controllers;

//inisialisasi model yg akan digunakan
use App\Models\UserModel;
use App\Models\AuthModel;

//inisialisasi utk terima data post/get, validasi dll
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\AlertError;

class Spv extends BaseController
{
    //multi fungsi variabel
    protected $UserModel;

    public function __construct()
    {
        //menggunakan model
        $this->UserModel = new UserModel();
    }

    //DASHBOARD
    public function index()
    {
        $data['tittle'] = 'Dashboard | Monitoring Kinerja Sales';
        $data['woSpv'] = $this->UserModel->woSpv();
        $data['psSpv'] = $this->UserModel->psSpv();
        $data['leader'] = $this->UserModel->leader();
        return view('spv/dashboard', $data);
    }

    //SALES ORDER
    public function order()
    {
        $data['tittle'] = 'Sales Order | Monitoring Kinerja Sales';
        $data['custSpv'] = $this->UserModel->custSpv();
        return view('spv/order', $data);
    }

    //CUSTOMER
    public function sales()
    {
        session();
        $data['tittle'] = 'Customers | Monitoring Kinerja Sales';
        $data['salesSpv'] = $this->UserModel->salesSpv();
        return view('spv/sales', $data);
    }
}
