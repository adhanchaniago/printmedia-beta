<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		
		$this->load->view('Admin/index');
	}
	public function Input_Universitas()
	{
		$this->load->view('Admin/Input_Universitas');
	}

	public function Inputdb_Univ()
	{
		$this->load->model('Admin_model');
		
		$data = array
			(
				'nama_univ' => $this->input->post('univ'), // yang kanan nama di form
				'kota' => $this->input->post('kota')
	        );

			$data = $this->Admin_model->insert('universitas', $data);

			if( $data )
			{
				redirect(base_url('Admin/Tampil_Univ'));
			}
			else
			{
				$this->session->set_flashdata('error', 'GAGAL MENAMBAHAN');
				redirect(base_url('Admin/Tampil_Univ'));
			}
	}

	public function Tampil_Univ()
	{
		$this->load->model('Admin_model');
		$data=$this->Admin_model->tampiluniv('universitas');
		$data=array('data'=> $data);
		$this->load->view('Admin/Data_Univ',$data);
	}
}
