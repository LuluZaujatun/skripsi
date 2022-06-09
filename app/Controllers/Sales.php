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

    //DASHBOARD
    public function index()
    {
        $data['tittle'] = 'Dashboard | Monitoring Kinerja Sales';
        $data['woSales'] = $this->UserModel->woSales();
        $data['psSales'] = $this->UserModel->psSales();
        $data['leader'] = $this->UserModel->leader();
        return view('sales/dashboard', $data);
    }

    //SALES ORDER
    public function salesOrder()
    {
        $data['tittle'] = 'Sales Order | Monitoring Kinerja Sales';
        $data['customer'] = $this->UserModel->selectCust();
        return view('sales/salesOrder', $data);
    }

    //CUSTOMER
    public function custSales()
    {
        session();
        $data['tittle'] = 'Customers | Monitoring Kinerja Sales';
        $data['customer'] = $this->UserModel->selectCust();

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

    public function singleCs($id = null)
    {
        $UserModel = new UserModel();
        $data['tittle'] = 'Customers | Monitoring Kinerja Sales';
        $data['custobj'] = $UserModel->editdatacust($id);
        return view('sales/editCs', $data);
    }

    public function updateCs()
    {
        $data2['tittle'] = 'Customers | Monitoring Kinerja Sales';
        $this->db = \Config\Database::connect();
        $id_customer = $this->request->getVar('id_customer');
        $date_input = $this->request->getVar('date_input');
        $no_order = $this->request->getVar('no_order');
        $nama_cust = $this->request->getVar('nama_cust');
        $sto = $this->request->getVar('sto');
        $mitra = $this->request->getVar('mitra');
        $pic = $this->request->getVar('pic');
        $status = $this->request->getVar('status');
        $paket = $this->request->getVar('paket');
        $speed = $this->request->getVar('speed');
        $abonemen = $this->request->getVar('abonemen');
        $sql = "update customer set date_input='" . $date_input . "', no_order='" . $no_order . "', nama_cust='" . $nama_cust . "',sto='" . $sto . "',mitra='" . $mitra . "',pic='" . $pic . "',status='" . $status . "',paket='" . $paket . "',speed='" . $speed . "',abonemen='" . $abonemen . "' where id_customer='" . $id_customer . "'";
        $this->db->query($sql);
        session()->setFlashdata('pesan', 'Data Updated Successfully!');
        return $this->response->redirect(site_url('table-custSales'));
    }
}

//MNA : Elfan Ery DS1231 , Dinda Marsha DS1232, Annisa DS1233
//MCP : Indah Ayu DS1234, Diana DS1236
//SDS : Doni Pratama DS12315, Reza Pratama DS1237
