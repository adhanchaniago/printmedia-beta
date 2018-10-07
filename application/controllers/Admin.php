<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{	$this->load->model('Admin_model');
		$data=$this->Admin_model->tampiluser('activity_user');
		$data=array('data'=> $data);
		$this->load->view('Admin/index',$data);
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
			$this->session->set_flashdata('error_univ',"'.form_error('univ').'");
			$this->load->model('Admin_model');
			$data = $this->Admin_model->tampiluniv('regencies');
			$data=array('data'=> $data);
			$this->load->view('Admin/Input_Universitas',$data);
		}
		else
		{
			$data = array
			(
				'nama_univ' => $this->input->post('univ'),
				'kota' => $this->input->post('kota')
	        );

			$data = $this->Admin_model->insert('universitas', $data);
			$this->session->set_flashdata('success_univ', 'Berhasil Menambahkan Universitas '.$this->input->post('univ'));
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
			$this->session->set_flashdata('error_jurusan',"'.form_error('jurusan').'");
			$data = $this->Admin_model->tampiluniv('regencies');
			$data=array('data'=> $data);
			$this->load->view('Admin/Input_Universitas',$data);
		}
		else
		{
			$data = array
			(
				'jurusan' => $this->input->post('jurusan') // yang kanan nama di form
	        );

			$data = $this->Admin_model->insert('jurusan', $data);

			$this->session->set_flashdata('success_jurusan', 'Berhasil Menambahkan Jurusan '.$this->input->post('jurusan'));
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
		$this->load->model('Admin_model');
		$data=$this->Admin_model->tampiluniv('jurusan');
		$data=array('data'=> $data);
		$this->load->view('Admin/Data_Jurusan',$data);
	}
	public function Tampil_User()
	{
		$this->load->model('Admin_model');
		$data=$this->Admin_model->tampiluniv('user');
		$data=array('data'=> $data);
		$this->load->view('Admin/Data_User',$data);
	}
	public function Hapus_Univ($id)
		{
			$this->load->model('Admin_model');
			$where = array('id' => $id);
			$data=$this->Admin_model->hapus('universitas',$where);
			if($data){
				$this->session->set_flashdata('success_del_univ', 'BERHASIL MENGHAPUS');
				redirect(base_url('Admin/Tampil_Univ'));
			}
			else{
				$this->session->set_flashdata('error_del_univ', 'GAGAL MENGHAPUS');
				redirect(base_url('Admin/Tampil_Univ'));
			}
		}
}
?>