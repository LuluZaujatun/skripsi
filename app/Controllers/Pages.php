<?php

namespace App\Controllers;

//inisialisasi model yg akan digunakan
use App\Models\UserModel;
//inisialisasi utk terima data post/get, validasi dll
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\AlertError;

class Pages extends BaseController
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
        $data['wo'] = $this->UserModel->wo();
        $data['ps'] = $this->UserModel->ps();
        $data['leader'] = $this->UserModel->leader();
        return view('pages/dashboard', $data);
    }

    //SALES ORDER
    public function sales_order()
    {
        $data['tittle'] = 'Sales Order | Monitoring Kinerja Sales';
        $data['customer'] = $this->UserModel->selectdatacust();
        return view('pages/sales_order', $data);
    }

    public function singleSo($id = null)
    {
        $UserModel = new UserModel();
        $data = [
            'tittle'        => 'Progress | Monitoring Kinerja Sales',
            'validation'    => \Config\Services::validation()
        ];
        $data['custpro'] = $this->UserModel->editdatacust($id);
        return view('pages/modalSo', $data);
    }

    public function progress()
    {
        $data2['tittle'] = 'Progress | Monitoring Kinerja Sales';
        $this->db = \Config\Database::connect();
        //$data['custpro'] = $this->UserModel->editdatacust($id);
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
        session()->setFlashdata('pesan', 'Status Updated Successfully!');
        return $this->response->redirect(site_url('table-so'));
    }

    public function detail($id = null)
    {
        $UserModel = new UserModel();
        $data['tittle'] = 'Detail | Monitoring Kinerja Sales';
        $data['custobj'] = $this->UserModel->editdatacust($id);
        return view('pages/detail', $data);
    }

    //CUSTOMER
    public function customers()
    {
        $data['tittle'] = 'Customers | Monitoring Kinerja Sales';
        $data['customer'] = $this->UserModel->selectdatacust();
        return view('pages/customers', $data);
    }

    public function addCust()
    {
        $data = [
            'tittle'        => 'Tambah Data | Monitoring Kinerja Sales',
            'validation'    => \Config\Services::validation()
        ];
        return view('pages/addCust', $data);
    }

    public function saveCust()
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
            return redirect()->to('/pages/addCust')->withInput();
        }
        $data['customer'] = $this->UserModel->insertcust();
        //dd($this->request->getVar());
        session()->setFlashdata('pesan', 'Data added successfully!');
        return $this->response->redirect(site_url('table-cust'));
    }

    public function singleCust($id = null)
    {
        $UserModel = new UserModel();
        $data['tittle'] = 'Customers | Monitoring Kinerja Sales';
        $data['custobj'] = $UserModel->editdatacust($id);
        return view('pages/editCust', $data);
    }

    public function updateCust()
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
        return $this->response->redirect(site_url('table-cust'));
    }

    public function deleteCust($id = null)
    {
        $this->db = \Config\Database::connect();
        $sql = "delete from customer where id_customer='" . $id . "'";
        $this->db->query($sql);
        session()->setFlashdata('pesan', 'Data deleted successfully!');
        return $this->response->redirect(site_url('table-cust'));
    }

    //DATA SALES
    public function data_sales()
    {
        $data['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        $data['sales'] = $this->UserModel->selectdatasales();
        //dd($data);
        return view('pages/data_sales', $data);
    }

    public function add()
    {
        //session();
        $data = [
            'tittle'        => 'Tambah Data | Monitoring Kinerja Sales',
            'validation'    => \Config\Services::validation()
        ];
        return view('pages/add', $data);
    }

    public function add_aksi()
    {
        $data['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        //validasi input
        if (!$this->validate([
            'userID' => 'required|is_unique[data_sales.userID]',
            'nama_sales' => 'required|alpha_space[data_sales.nama_sales]',
            'witel' => 'required|alpha_space[data_sales.witel]',
            'no_telp' => 'required|is_natural[data_sales.no_telp]',
            'mitra' => 'required|alpha_space[data_sales.mitra]',
            'posisi' => 'required|alpha_space[data_sales.posisi]',
            'tgl_aktif' => 'required',
            'spv' => 'required|alpha_space[data_sales.spv]',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/add')->withInput();
        }

        $data['sales'] = $this->UserModel->insertsales();
        session()->setFlashdata('pesan', 'Data added successfully!');
        return $this->response->redirect(site_url('table-sales'));
    }

    public function singleData($id = null)
    {
        $UserModel = new UserModel();
        $data = [
            'tittle'        => 'Edit Data | Monitoring Kinerja Sales',
            'validation'    => \Config\Services::validation()
        ];
        $data['salesobj'] = $UserModel->editdatasales($id);
        return view('pages/edit_view', $data);
    }

    public function updatedata()
    {
        $data2['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        $this->db = \Config\Database::connect();
        $id_sales = $this->request->getVar('id_sales');
        $userID = $this->request->getVar('userID');
        $nama = $this->request->getVar('nama_sales');
        $witel = $this->request->getVar('witel');
        $noTelp = $this->request->getVar('no_telp');
        $mitra = $this->request->getVar('mitra');
        $posisi = $this->request->getVar('posisi');
        $tglAktif = $this->request->getVar('tgl_aktif');
        $spv = $this->request->getVar('spv');
        $sql = "update data_sales set userID='" . $userID . "', nama_sales='" . $nama . "', witel='" . $witel . "',no_telp='" . $noTelp . "',mitra='" . $mitra . "',posisi='" . $posisi . "',tgl_aktif='" . $tglAktif . "',spv='" . $spv . "' where id_sales='" . $id_sales . "'";
        $this->db->query($sql);
        session()->setFlashdata('pesan', 'Data Updated Successfully!');
        return $this->response->redirect(site_url('/pages/data_sales'));
    }

    public function delete($id = null)
    {
        // $data2['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        $this->db = \Config\Database::connect();
        $sql = "delete from data_sales where id_sales='" . $id . "'";
        $this->db->query($sql);
        session()->setFlashdata('pesan', 'Data deleted successfully!');
        return $this->response->redirect(site_url('/pages/data_sales'));
    }

    //USER
    public function user()
    {
        $data['tittle'] = 'User | Monitoring Kinerja Sales';
        $data['user'] = $this->UserModel->user();
        return view('pages/user', $data);
    }

    public function register()
    {
        $data = [
            'tittle' => 'Register | Monitoring Kinerja Sales',
            'validation' => \Config\Services::validation()
        ];
        return view('pages/register', $data);
    }

    public function regisSave()
    {
        $data = [
            'tittle' => 'Register | Monitoring Kinerja Sales',
            'validation' => \Config\Services::validation(),
        ];
        if (!$this->validate([
            'userID' => 'required|is_unique[user.userID]',
            'password' => 'required',
            'name' => 'required',
            'posisi' => 'required',
            'level' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/register')->withInput();
        }
        $this->db = \Config\Database::connect();
        $data['user'] = $this->UserModel->regis();
        session()->setFlashdata('pesan', 'Register successfully!');
        return view('pages/register', $data);
    }

    public function editUser($id = null)
    {
        $UserModel = new UserModel();
        $data = [
            'tittle'        => 'Edit Data | Monitoring Kinerja Sales',
            'validation'    => \Config\Services::validation()
        ];
        $data['user'] = $UserModel->editUser($id);
        return view('pages/editUser', $data);
    }

    public function updateUser()
    {
        $data2['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        //validasi input
        if (!$this->validate([
            'password' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput();
        }
        $this->db = \Config\Database::connect();
        $id = $this->request->getVar('id');
        $userID = $this->request->getVar('userID');
        $name = $this->request->getVar('name');
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $posisi = $this->request->getVar('posisi');
        $level = $this->request->getVar('level');
        $sql = "update user set userID='" . $userID . "', name='" . $name . "',password='" . $password . "',posisi='" . $posisi . "',level='" . $level . "' where id='" . $id . "'";
        $this->db->query($sql);
        session()->setFlashdata('pesan', 'Data Updated Successfully!');
        return $this->response->redirect(site_url('/pages/user'));
    }

    public function deleteUser($id = null)
    {
        // $data2['tittle'] = 'Data User | Monitoring Kinerja Sales';
        $this->db = \Config\Database::connect();
        $sql = "delete from user where id='" . $id . "'";
        $this->db->query($sql);
        session()->setFlashdata('pesan', 'Data deleted successfully!');
        return $this->response->redirect(site_url('/pages/user'));
    }

    public function setting()
    {
        $data['tittle'] = 'Setting Points | Monitoring Kinerja Sales';
        $data['setting'] = $this->UserModel->setting();
        return view('pages/setting', $data);
    }

    public function editPoint($id = null)
    {
        $UserModel = new UserModel();
        $data = [
            'tittle'        => 'Edit Data | Monitoring Kinerja Sales',
            'validation'    => \Config\Services::validation()
        ];
        $data['setting'] = $UserModel->editPoint($id);
        return view('pages/editPoint', $data);
    }

    public function updatePoint()
    {
        $data2['tittle'] = 'Data Sales | Monitoring Kinerja Sales';
        //validasi input
        if (!$this->validate([
            'periode' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput();
        }
        $this->db = \Config\Database::connect();
        $id = $this->request->getVar('id');
        $indikator = $this->request->getVar('indikator');
        $deskripsi = $this->request->getVar('deskripsi');
        $point = $this->request->getVar('point');
        $periode = $this->request->getVar('periode');
        $sql = "update setting set indikator='" . $indikator . "', deskripsi='" . $deskripsi . "',point='" . $point . "',periode='" . $periode . "' where id='" . $id . "'";
        $this->db->query($sql);
        session()->setFlashdata('pesan', 'Periode Updated Successfully!');
        return $this->response->redirect(site_url('/pages/setting'));
    }
}
