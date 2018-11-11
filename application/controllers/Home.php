<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$email = 'wrep17@gmail.com';
		$code = '123';
		$isi = '<table>';
		$isi .= '<tr><td><h4>Aktifkan Akun Print Media!</h4></td></tr>';
		$isi .= '<tr><td><p>Halo <b>' . $email . '</b> terima kasih telah melakukan pendaftaran di Print Media. Kami beritahukan kepada Anda untuk melakukan aktivasi akun agar bisa digunakan.</p></td></tr>';
		$isi .= '<tr><td><a href="'.base_url().'aktivasi/'.$code.'">AKTIVASI AKUN</a></td></tr>';
		$isi .= '<tr><td><p>Terima Kasih, Salam Print Media</p></td></tr>';
        $isi .= '</table>';
		print_r($isi);
	}
}
