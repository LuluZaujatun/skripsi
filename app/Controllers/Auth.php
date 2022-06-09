<?php

namespace App\Controllers;

//use App\Models\UserModel;
use App\Models\UserModel;
use App\Models\AuthModel;
//inisialisasi utk terima data post/get, validasi dll
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\AlertError;

class Auth extends BaseController
{
    protected $UserModel;
    //private $session;
    public function __construct()
    {
        //menggunakan model
        $this->UserModel = new UserModel();
        $this->session = \Config\Services::session();
        //$this->session = \Config\Services::session();
    }

    public function login()
    {
        $data = [
            'tittle' => 'Login | Monitoring Kinerja Sales',
            'validation' => \Config\Services::validation()
        ];
        $model = new AuthModel;
        $table = 'user';
        $userID = $this->request->getPost('userID');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($userID, $table);
        if ($row == NULL) {
        }
        echo view('auth/login', $data);
    }

    public function proses()
    {
        session();
        $data = [
            'tittle' => 'Login | Monitoring Kinerja Sales'
        ];
        if (!$this->validate([
            'userID' => 'required',
            'password' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/login')->withInput();
        }
        $this->db = \Config\Database::connect();
        $model = new AuthModel;
        $table = 'user';
        $userID = $this->request->getPost('userID');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($userID, $table);
        if ($row == NULL) {
            //dd($data);
            return redirect()->back()->with('error', 'User ID not found');
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'userID' => $row->userID,
                'name' => $row->name,
                'posisi' => $row->posisi,
                'level' => $row->level,
            );
            session()->set($data);

            if (session()->level == 1) {
                return redirect()->to(base_url('/pages'));
            }
            if (session()->level == 2) {
                return redirect()->to(base_url('/sales'));
            } else {
                return redirect()->to(base_url('/spv'));
            }
        } else {
            return redirect()->back()->with('error', 'Password not found');
        }
    }

    public function forgot()
    {
        $data = [
            'tittle' => 'Forgot Password | Monitoring Kinerja Sales',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/forgot', $data);
    }

    public function send()
    {
        $data = [
            'tittle' => 'Forgot | Monitoring Kinerja Sales'
        ];
        if (!$this->validate([
            'userID' => 'required',
            'name' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/forgot')->withInput();
        }
        $data['forgot'] = $this->UserModel->forgot();
        session()->setFlashdata('pesan', 'User ID successfully sent!');
        return $this->response->redirect(site_url('forgot'));
    }

    public function logout()
    {
        $data = [
            'tittle' => 'Login | Monitoring Kinerja Sales',
            'validation' => \Config\Services::validation()
        ];
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'logout successfully');
        return redirect()->to('login');
    }
}
