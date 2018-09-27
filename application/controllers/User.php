<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$email = array('email' => $this->session->userdata('email')) ;
		$cek = $this->User_model->GetWhere('user', $email);
		$cek = $cek->row_array();
		
		if($cek == NULL)
		{
			redirect(base_url('myprofile'));
		}
		else
		{
			$this->session->set_userdata('username', $cek['nama']);
			$this->load->view('user/history');
		}
	}

	public function myprofile()
	{	
		$this->load->view('user/myprofile');			
	}

	public function upload()
	{
		$this->load->view('user/upload');
	}

	public function inputdata()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama', 'trim|required|alpha|xss_clean');
		$this->form_validation->set_rules('no_handphone', 'Nomor Handphone', 'trim|required|numeric|min_length[10]|max_length[13]');
		$this->form_validation->set_rules('kodepos', 'Kode Pos', 'trim|required|numeric|min_length[5]|max_length[5]');


		$this->form_validation->set_message('required', 'Kolom <b>%s</b> Anda Tidak Boleh Kosong');
		$this->form_validation->set_message('alpha', '<b>%s</b> tidak boleh mengandung angka');
		$this->form_validation->set_message('numeric', '%s Tidak boleh mengandung huruf');
		$this->form_validation->set_message('min_length', 'KOlom %s  Wajib 5 Angka');
		$this->form_validation->set_message('max_length', '%s Nomernya Kebanyakan Bos');	

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('user/myprofile');
		}
		else
		{
			$data = array
			(
				'nama' => $this->input->post('nama_lengkap'), // Kiri Nama Kolom
				'nohape' => $this->input->post('no_handphone'), // Kanan nama form di views
				'gender' => $this->input->post('jenis_kelamin'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'detail_alamat' => $this->input->post('detail_alamat'),
				'provinsi' => $this->input->post('provinsi'),
				'kota' => $this->input->post('kota'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kodepos' => $this->input->post('kodepos'),
			);

			$data = $this->User_model->Insert('user', $data);
			redirect('user/upload');
		}

		
	}

	public function listkota()
	{
		// Ambil data ID Provinsi yang dikirim via ajax post
		$province_id = $this->input->post('province_id');
    
		$kota = $this->User_model->viewByProvinsi($province_id);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>Pilih</option>";
		
		foreach($kota as $data){
		  $lists .= "<option value='".$data['id']."'>".$data['name']."</option>"; // Tambahkan tag option ke variabel $lists
		}
		
		$callback = array('list_kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	public function listkecamatan()
	{
		// Ambil data ID Provinsi yang dikirim via ajax post
		$regency_id = $this->input->post('regency_id');
    
		$kota = $this->User_model->viewByKota($regency_id);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$lists = "<option value=''>Pilih</option>";
		
		foreach($kota as $data){
		  $lists .= "<option value='".$data['id']."'>".$data['name']."</option>"; // Tambahkan tag option ke variabel $lists
		}
		
		$callback = array('list_kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}
	
}
