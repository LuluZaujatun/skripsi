<?php

namespace App\Models;

use CodeIgniter\Model;
//insialisasi depedensi utk tangkap data get/post
use CodeIgniter\HTTP\RequestInterface;

class UserModel extends Model
{
    //membuat variable multi function dan turunannya
    protected $db;
    protected $request;
    protected $table = 'user';

    public function __construct()
    {
        //inisialisasi koneksi
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }

    function get_data($nama_sales, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('nama_sales', $nama_sales);
        $log = $builder->get()->getRow();
        return $log;
    }

    //CUSTOMER
    public function point()
    {
        //pembuatan query
        $sql = "SELECT COUNT(status) as ps FROM customers group by pic";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getNumRows();

        //kembalikan hasil query ke controller
        return $data;
    }

    //DASHBOARD ADMIN
    public function leader()
    {
        //pembuatan query
        $sql = "SELECT COUNT(IF(status between 'IN PROGRESS' AND 'NO ODP',1,NULL)) as wo, 
        COUNT(IF(status='COMPLETED',1,NULL)) as ps, pic, mitra,
        SUM(IF(status between 'IN PROGRESS' AND 'NO ODP',1,NULL))*50 as wop,
        SUM(IF(status='COMPLETED',1,NULL))*100 as psp,
        (sum(if(status between 'IN PROGRESS' and 'NO ODP',1,0))*50)+ (sum(if(status='COMPLETED',1,0))*100) as poin
        from customer group by pic order by (sum(if(status between 'IN PROGRESS' and 'NO ODP',1,0))*50)+ (sum(if(status='COMPLETED',1,0))*100.1) desc";
        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function wo()
    {
        //pembuatan query
        $sql = "SELECT * FROM customer where status between 'IN PROGRESS' AND 'NO ODP'";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getNumRows();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function ps()
    {
        //$pic = session()->get('name');
        //return $this->db->table('customer')->countAll();
        //pembuatan query
        $sql = "SELECT * FROM customer where status='COMPLETED'";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getNumRows();

        //kembalikan hasil query ke controller
        return $data;
    }

    //DASHBOARD SALES
    public function woSls()
    {
        $mitra = $this->request->getVar('mitra');
        $pic = $this->request->getVar('pic');
        $status = $this->request->getVar('status');
        //pembuatan query
        $sql = "INSERT INTO leader(mitra, pic, status)
                    VALUES('$mitra', '$pic', '$status')";

        //eksekusi query sql
        //exit("Warning:$sql");
        $this->db->query($sql);
        //dd($data);
        return;
    }

    public function woSales()
    {
        $pic = session()->get('name');
        //pembuatan query
        $sql = "SELECT * FROM customer where pic='$pic' AND status between 'IN PROGRESS' AND 'NO ODP'";
        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getNumRows();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function psSales()
    {
        $pic = session()->get('name');
        //return $this->db->table('customer')->countAll();
        //pembuatan query
        //$sql = "SELECT pic where pic='$pic', status FROM customer INNER JOIN customer ON status where status='COMPLETED'";
        $sql = "SELECT * FROM customer where pic='$pic' AND status='COMPLETED'";
        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getNumRows();

        //kembalikan hasil query ke controller
        return $data;
    }

    //DASHBOARD SPV
    public function woSpv()
    {
        $pic = session()->get('posisi');
        //$sql1 = "SELECT * FROM customer where pic='$pic' ";
        //pembuatan query
        //$sql = "SELECT pic FROM customer where status between 'IN PROGRESS' AND 'NO ODP'";
        $sql = "SELECT * FROM customer where mitra='$pic' AND status between 'IN PROGRESS' AND 'NO ODP'";
        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getNumRows();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function psSpv()
    {
        $pic = session()->get('posisi');
        //return $this->db->table('customer')->countAll();
        //pembuatan query
        //$sql = "SELECT pic where pic='$pic', status FROM customer INNER JOIN customer ON status where status='COMPLETED'";
        $sql = "SELECT * FROM customer where mitra='$pic' AND status='COMPLETED'";
        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getNumRows();

        //kembalikan hasil query ke controller
        return $data;
    }

    //CUSTOMER
    public function selectdatacust()
    {
        //pembuatan query
        $sql = "SELECT * FROM customer";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    //CUSTOMER SALES
    public function selectCust()
    {
        //pembuatan query
        $pic = session()->get('name');

        $sql = "SELECT * FROM customer where pic='$pic' ";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function insertcust()
    {
        //tangkap data post
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

        $data = [
            'date_input' => $date_input,
            'no_order' => $no_order,
            'nama_cust' => $nama_cust,
            'sto' => $sto,
            'mitra' => $mitra,
            'pic' => $pic,
            'status' => $status,
            'paket' => $paket,
            'speed' => $speed,
            'abonemen' => $abonemen,
        ];

        //pembuatan query
        $sql = "INSERT INTO customer(date_input, no_order, nama_cust, sto, mitra, pic, status, paket, speed, abonemen)
                    VALUES('$date_input', '$no_order', '$nama_cust', '$sto', '$mitra', '$pic', '$status', '$paket', '$speed', '$abonemen')";

        //eksekusi query sql
        //exit("Warning:$sql");
        $this->db->query($sql);
        //dd($data);
        return;
    }

    public function editdatacust($id)
    {
        //pembuatan query
        $sql = "SELECT * FROM customer where id_customer='" . $id . "'";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    //CUSTOMER SPV
    public function custSpv()
    {
        //pembuatan query
        $pic = session()->get('posisi');

        $sql = "SELECT * FROM customer where mitra='$pic' ";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    //DATA SALES SPV
    public function salesSpv()
    {
        //pembuatan query
        $pic = session()->get('posisi');

        $sql = "SELECT * FROM data_sales where mitra='$pic' ";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    //DATA SALES PIC
    public function selectdatasales()
    {
        //pembuatan query
        $sql = "SELECT * FROM data_sales";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function insertsales()
    {
        //tangkap data post
        $userID = $this->request->getVar('userID');
        $nama = $this->request->getVar('nama_sales');
        $witel = $this->request->getVar('witel');
        $noTelp = $this->request->getVar('no_telp');
        $mitra = $this->request->getVar('mitra');
        $posisi = $this->request->getVar('posisi');
        $tglAktif = $this->request->getVar('tgl_aktif');
        $spv = $this->request->getVar('spv');
        //dd($nama);
        $data = [
            'userID' => $userID,
            'nama' => $nama,
            'witel' => $witel,
            'no_telp' => $noTelp,
            'mitra' => $mitra,
            'posisi' => $posisi,
            'tgl_aktif' => $tglAktif,
            'spv' => $spv
        ];

        //pembuatan query
        $sql = "INSERT INTO data_sales(userID, nama_sales, witel, no_telp, mitra, posisi, tgl_aktif, spv)
                    VALUES('$userID', '$nama', '$witel', '$noTelp', '$mitra', '$posisi', '$tglAktif', '$spv')";

        //eksekusi query sql
        //exit("Warning:$sql");
        $this->db->query($sql);

        return;
    }

    public function editdatasales($id)
    {
        //pembuatan query
        $sql = "SELECT * FROM data_sales where id_sales='" . $id . "'";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    //LOGIN
    public function login($id)
    {
        //pembuatan query
        $sql = "SELECT * FROM user where userID='" . $id . "', password='" . $id . "'";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function forgot()
    {
        $userID = $this->request->getVar('userID');
        $name = $this->request->getVar('name');

        //pembuatan query
        $sql = "INSERT INTO sendForgot(userID, name)
                    VALUES('$userID', '$name')";

        //eksekusi query sql
        //exit("Warning:$sql");
        $this->db->query($sql);

        return;
    }

    //USER
    public function user()
    {
        //pembuatan query
        $sql = "SELECT * FROM user";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function regis()
    {
        $id = $this->request->getVar('id');
        $userID = $this->request->getVar('userID');
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $name =  $this->request->getVar('name');
        $posisi =  $this->request->getVar('posisi');
        $level = $this->request->getVar('level');
        //pembuatan query
        $sql = "INSERT INTO user(id, userID, password, name, posisi, level )
                    VALUES('$id', '$userID', '$password', '$name', '$posisi', '$level')";

        //eksekusi query sql
        //exit("Warning:$sql");
        $this->db->query($sql);

        return;
    }

    public function editUser($id)
    {
        //pembuatan query
        $sql = "SELECT * FROM user where id='" . $id . "'";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    //SETTING
    public function setting()
    {
        //pembuatan query
        $sql = "SELECT * FROM setting";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    public function editPoint($id)
    {
        //pembuatan query
        $sql = "SELECT * FROM setting where id='" . $id . "'";

        //eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        //kembalikan hasil query ke controller
        return $data;
    }

    protected $allowedFields = [
        'userID', 'password1', 'level', 'name', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
        'userID', 'nama_sales', 'witel', 'no_telp', 'mitra', 'posisi', 'tgl_aktif', 'spv',
    ];

    protected $validationRules = [
        //'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        //'username'      => 'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
        //'password_hash' => 'required',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updateFields = 'updated_at';
}
