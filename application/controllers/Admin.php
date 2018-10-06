<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('Admin/index');
	}
	public function Input_Universitas()
	{
		$this->load->model('Admin_model');
		$data = $this->Admin_model->tampiluniv('regencies');
		$data=array('data'=> $data);
		$this->load->view('Admin/Input_Universitas',$data);
	}
	public function Input_Jurusan()
	{
		$this->load->view('Admin/Input_Jurusan');
	}

	public function Inputdb_Univ()
	{
		$this->load->model('Admin_model');
		$this->form_validation->set_rules('univ', 'Universitas', 'trim|required|is_unique[universitas.nama_univ]|xss_clean');
		$this->form_validation->set_message('required', 'Mohon Maaf! Harap mengisi kolom <b>%s</b>.');
		$this->form_validation->set_message('is_unique', 'Mohon Maaf! <b>%s</b> sudah diinputkan.');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->model('Admin_model');
			$data = $this->Admin_model->tampiluniv('regencies');
			$data=array('data'=> $data);
			$this->load->view('Admin/Input_Universitas',$data);
		}
		else
		{
			$data = array
			(
				'nama_univ' => $this->input->post('univ'), // yang kanan nama di form
				'kota' => $this->input->post('kota')
	        );

			$data = $this->Admin_model->insert('universitas', $data);

			$this->session->set_flashdata('success', 'Berhasil Menambahkan Universitas '.$this->input->post('univ'));
			redirect(base_url('Admin/Input_Universitas'));
		}
			
	}

	public function Inputdb_Jurusan()
	{
		$this->load->model('Admin_model');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required|is_unique[jurusan.jurusan]|xss_clean');
		$this->form_validation->set_message('required', 'Mohon Maaf! Harap mengisi kolom <b>%s</b>.');
		$this->form_validation->set_message('is_unique', 'Mohon Maaf! <b>%s</b> sudah diinputkan.');
		
		if($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/Input_Universitas');
		}
		else
		{
			$data = array
			(
				'jurusan' => $this->input->post('jurusan') // yang kanan nama di form
	        );

			$data = $this->Admin_model->insert('jurusan', $data);

			$this->session->set_flashdata('success', 'Berhasil Menambahkan Jurusan '.$this->input->post('jurusan'));
			redirect(base_url('admin/Input_Universitas'));
		}
		
	}

	public function Tampil_Univ()
	{
		$this->load->model('Admin_model');
		$data=$this->Admin_model->tampiluniv('universitas');
		$data=array('data'=> $data);
		$this->load->view('Admin/Data_Univ',$data);
	}
	public function Tampil_Jurusan()
	{
		
	}
}
