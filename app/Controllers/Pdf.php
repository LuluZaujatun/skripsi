<?php

namespace App\Controllers;

//inisialisasi model yg akan digunakan
use App\Models\UserModel;
//inisialisasi utk terima data post/get, validasi dll
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\AlertError;
use \Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends BaseController
{
    public function __construct()
    {
        //menggunakan model
        $this->UserModel = new UserModel();
    }

    public function pdfView()
    {
        $data['tittle'] = 'Dashboard | Monitoring Kinerja Sales';
        $data['sales'] = $this->UserModel->selectdatasales();
        require_once __DIR__ . '/vendor/autoload.php';
        return view('pages/dashboard', $data);
    }

    public function generate()
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $data['leader'] = $this->UserModel->leader();
        $data['customer'] = $this->UserModel->selectdatacust();
        $data['wo'] = $this->UserModel->wo();
        $data['ps'] = $this->UserModel->ps();
        $filename = date('d-m-y') . ' Report Monitoring Sales';
        // load HTML content
        $dompdf->loadHtml(view('pages/pdf', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename, array(
            "Attachment" => false
        ));
    }

    public function generateSls()
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $data['selectCust'] = $this->UserModel->selectCust();
        $data['leader'] = $this->UserModel->leader();
        $data['woSales'] = $this->UserModel->woSales();
        $data['psSales'] = $this->UserModel->psSales();
        $filename = date('d-m-y') . ' Report Monitoring Customer';
        // load HTML content
        $dompdf->loadHtml(view('sales/pdfSls', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename, array(
            "Attachment" => false
        ));
    }

    public function generateSpv()
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $data['leader'] = $this->UserModel->leader();
        $data['custSpv'] = $this->UserModel->custSpv();
        $data['salesSpv'] = $this->UserModel->salesSpv();
        $data['woSpv'] = $this->UserModel->woSpv();
        $data['psSpv'] = $this->UserModel->psSpv();
        $filename = date('d-m-y') . ' Report Monitoring Mitra';
        // load HTML content
        $dompdf->loadHtml(view('spv/pdfSpv', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename, array(
            "Attachment" => false
        ));
    }
}
