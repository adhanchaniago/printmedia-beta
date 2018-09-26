<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$this->load->view('user/history');
	}

	public function myprofile()
	{
		if($this->session->userdata('akses') || $this->session->userdata('akses') == 'Member' )
			{
			$this->load->model('user_model');
			$email=$this->session->userdata('email');
			$data=array('email'=>$email);
			$cek=$this->user_model->GetWhere('user',$data)->num_rows();
				if($cek==NULL)
				{
					redirect(base_url('user/myprofile'));
					
				}

				else
				{
					
					
					$this->session->set_userdata('username', $cek['nama']);
					redirect(base_url('user/index'));
				}
				
			}
			else
			{
				redirect('login');
			}		
	}

	public function upload()
	{
		$this->load->view('user/upload');
	}

	public function inputdata()
	{
		$data = array
		(
					'nama' => $this->input->post('nama_lengkap'),
					'nohape' => $this->input->post('no_handphone'),
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
