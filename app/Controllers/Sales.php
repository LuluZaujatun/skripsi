<?php

namespace App\Controllers;

//inisialisasi model yg akan digunakan
use App\Models\UserModel;
use App\Models\AuthModel;

//inisialisasi utk terima data post/get, validasi dll
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\AlertError;

class Sales extends BaseController
{
    //multi fungsi variabel
    protected $UserModel;

    public function __construct()
    {
        //menggunakan model
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data['tittle'] = 'Dashboard | Monitoring Kinerja Sales';
        $data['sales'] = $this->UserModel->selectdatasales();
        return view('sales/dashboard', $data);
    }

    public function salesOrder()
    {
        $data['tittle'] = 'Sales Order | Monitoring Kinerja Sales';
        $data['customer'] = $this->UserModel->selectdatacust();
        return view('sales/salesOrder', $data);
    }

    public function custSales()
    {
        $data['tittle'] = 'Customers | Monitoring Kinerja Sales';
        $data['customer'] = $this->UserModel->selectdatacust();
        return view('sales/custSales', $data);
    }

    public function addCustSales()
    {
        $data = [
            'tittle'        => 'Tambah Data | Monitoring Kinerja Sales',
            'validation'    => \Config\Services::validation()
        ];
        return view('sales/addCustSales', $data);
    }

    public function saveCustSales()
    {
        $data['tittle'] = 'Customers | Monitoring Kinerja Sales';
        //validasi input
        if (!$this->validate([
            'date_input' => 'required',
            'no_order'   => 'required|is_natural[customer.no_order]|is_unique[customer.no_order]',
            'nama_cust'  => 'required|alpha_space[customer.nama_cust]',
            'sto'        => 'required|alpha_space[customer.sto]',
            'mitra'      => 'required|alpha_space[customer.mitra]',
            'pic'        => 'required|alpha_space[customer.pic]',
            'status'     => 'required',
            'paket'      => 'required|alpha_numeric_space[customer.paket]',
            'speed'      => 'required|is_natural[customer.speed]',
            'abonemen'   => 'required|is_natural[customer.abonemen]',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/sales/addCustSales')->withInput();
        }
        $data['customer'] = $this->UserModel->insertcust();
        //dd($this->request->getVar());
        session()->setFlashdata('pesan', 'Data added successfully!');
        return $this->response->redirect(site_url('table-custSales'));
    }
}
