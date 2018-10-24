<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mitra_model');
    }

    public function index()
    {
        $this->load->view('mitra/index');
    }

    public function profiltoko()
    {
        $this->load->view('mitra/profil/toko');
    }

    public function profilpemilik()
    {
        $this->load->view('mitra/profil/pemilik');
    }
}
