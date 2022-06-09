<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //$auth = session('proses');
        //if (!$auth->isLoggedIn()) {
        if (session()->level == '') {
            //$session = session();
            //if ($session->get('log') != TRUE) {
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //if (session()->level == '1') {
        //$session = session('logout');
        //if ($session->get('log') == TRUE) {
        //    return redirect()->to('/pages');
        //}
        if (session()->level == 1) {
            return redirect()->to(base_url('/pages'));
        } else {
            return redirect()->to(base_url('/sales'));
        }
    }
}
