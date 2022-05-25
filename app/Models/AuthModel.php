<?php

namespace App\Models;

use CodeIgniter\Model;
//insialisasi depedensi utk tangkap data get/post
use CodeIgniter\HTTP\RequestInterface;

class AuthModel extends Model
{
    function get_data_login($userID, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('userID', $userID);
        $log = $builder->get()->getRow();
        return $log;
    }
}
