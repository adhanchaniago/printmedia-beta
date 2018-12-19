<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "vendor/autoload.php";
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/index');
	}

	public function tentang()
	{
		$this->load->view('home/tentang');
	}

	public function test()
	{
		$parser = new \Smalot\PdfParser\Parser();
		$pdf    = $parser->parseFile('coba4.pdf');
 
		$details  = $pdf->getDetails();
 
		// Loop over each property to extract values (string or array).
		foreach ($details as $property => $value) {
			if (is_array($value)) {
				$value = implode(', ', $value);
			}
			echo $property . ' => ' . $value . "<br>";
		}
		
	}
}
