<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Export extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Export_model');
    }

    public function exportUserPdf()
    {

    }

    public function exportUniversitasPdf()
    {

    }

    public function exportJurusanPdf()
    {

    }

    public function exportUserExcel()
    {

    }

    public function exportUniversitasExcel()
    {

    }

    public function exportJurusanExcel()
    {

    }

    public function exportUserSQL()
    {

    }

    public function exportUniversitasSQL()
    {

    }

    public function exportJurusanSQL()
    {
        
    }
    
    public function download()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        
        $writer = new Xlsx($spreadsheet);
        $awal = date('Y-m-d');
        $today = date('d-m-Y', strtotime($awal));
        $filename = 'Penjualan per '.$today;
 
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output'); // download file
    }
}
