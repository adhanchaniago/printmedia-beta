<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('security');
	}
	public function login()
	{
		$this->load->view('Auth/Login');
	}
	public function register()
	{
		$this->load->view('Auth/Register');
	}
	public function prosesregister()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[auth.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[15]');
		$this->form_validation->set_message('required', 'Mohon Maaf! Harap mengisi kolom %s');
		$this->form_validation->set_message('is_unique', 'Mohon Maaf! %s sudah digunakan.');
		$this->form_validation->set_message('min_length', 'Mohon Maaf! %s minimal 8 karakter.');
		$this->form_validation->set_message('max_length', 'Mohon Maaf! %s maksimal 15 karakter.');

		if( $this->form_validation->run() == FALSE )
		{
			//$this->session->set_flashdata('error', validation_errors());
			//redirect('register');
			$this->load->view('auth/register');
		}
		else
		{
			if(preg_match("/ac.id/", $this->input->post('email')) || preg_match("/.edu/", $this->input->post('email'))){
				date_default_timezone_set("Asia/Jakarta");
				$data = array(
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password')),
					'level' => 'Member',
					'token' => md5($this->input->post('email')),
					'waktu' => date('Y-m-d H:i:s'),
					'status' => 'Belum Aktif',
				);
				$data = $this->Auth_model->Insert('auth', $data);
				$this->session->set_flashdata('success', 'Berhasil Melakukan Registrasi');
				redirect('register');
			} else { 
				//$this->load->view('auth/register');
				$this->session->set_flashdata('error', 'Mohon Maaf! Hanya Email berdomain <b>.ac.id</b> dan <b>.edu</b> yang bisa Mendaftar.');
				redirect('register');
			}  
			
		}
	}

	public function validasi($email)
	{
		if(preg_match("/ac.id/", $email) || preg_match("/.edu/", $email)){
			return true;
		} else { 
			return false;
		}           
	}
}
