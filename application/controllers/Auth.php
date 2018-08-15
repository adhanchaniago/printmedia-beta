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
		$this->form_validation->set_message('required', 'Mohon Maaf! Harap mengisi kolom <b>%s</b>');
		$this->form_validation->set_message('is_unique', 'Mohon Maaf! <b>%s</b> sudah digunakan.');
		$this->form_validation->set_message('min_length', 'Mohon Maaf! <b>%s</b> minimal 8 karakter.');
		$this->form_validation->set_message('max_length', 'Mohon Maaf! <b>%s</b> maksimal 15 karakter.');

		if( $this->form_validation->run() == FALSE )
		{
			//$this->session->set_flashdata('error', validation_errors());
			//redirect('register');
			$this->load->view('auth/register');
		}
		else
		{
			if(preg_match("/ac.id/", $this->input->post('email')) || preg_match("/.edu/", $this->input->post('email')) || preg_match("/.com/", $email)) {
				date_default_timezone_set("Asia/Jakarta");
				$data = array(
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password')),
					'level' => 'Member',
					'token' => md5($this->input->post('email')),
					'waktu' => date('Y-m-d H:i:s'),
					'status' => 'Belum Aktif',
				);

				$ci = get_instance();
				$ci->load->library('email');
				$email = $this->input->post('email');
				$code = md5($this->input->post('email'));
				$config['protocol'] = "smtp";
				$config['smtp_host'] = "ssl://smtp.gmail.com";
				$config['smtp_port'] = "465";
				$config['smtp_user'] = "serbawrep@gmail.com";
				$config['smtp_pass'] = "gombloh123";
				$config['charset'] = "utf-8";
				$config['mailtype'] = "html";
				$config['newline'] = "\r\n";
				
				$ci->email->initialize($config);

				$isi = '<table>';
				$isi .= '<tr><td><h4>Aktifkan Akun Print Media!</h4></td></tr>';
				$isi .= '<tr><td><p>Halo <b>' . $email . '</b> terima kasih telah melakukan pendaftaran di Print Media. Kami beritahukan kepada Anda untuk melakukan aktivasi akun agar bisa digunakan.</p></td></tr>';
				$isi .= '<tr><td><a href="http://localhost/printmedia-beta/aktivasi/'.$code.' ">AKTIVASI AKUN</a></td></tr>';
				$isi .= '<tr><td><p>Terima Kasih, Salam Print Media</p></td></tr>';
				$isi .= '</table>';

				$ci->email->from('noreply@printmedia.com', 'PRINT MEDIA');
				$ci->email->to($email);
				$ci->email->subject('AKTIFASI AKUN PRINT MEDIA');
				$ci->email->message($isi);
				$this->email->send();

				$data = $this->Auth_model->Insert('auth', $data);
				
				$this->session->set_flashdata('success', 'Telah mendaftar di Print Media. Silahkan cek email teman - teman untuk melakukan aktivasi akun.');
				redirect('sukses');
				
			} else { 
				//$this->load->view('auth/register');
				$this->session->set_flashdata('error', 'Mohon Maaf! Hanya Email berdomain <b>.ac.id</b> dan <b>.edu</b> yang bisa Mendaftar.');
				redirect('register');
			}  
		}
	}

	public function sukses()
	{
		$this->load->view('auth/suksesdaftar');
	}

	public function aktivasi($token)
	{
		$this->Auth_model->aktivasi($token);
		$where = array('token' => $token);
		$data = $this->Auth_model->GetWhere('auth', $where);
		$data = array('data' => $data);
		if($data->token == 'Belum Aktif')
		{
			$this->load->view('auth/suksesaktivasi', $data);
		}
		else
		{
			redirect('login');
		}
		
	}

	public function validasi($email)
	{
		if(preg_match("/ac.id/", $email) || preg_match("/.edu/", $email) || preg_match("/.com/", $email) ){
			return true;
		} else { 
			return false;
		}           
	}

	public function cek()
	{
		$email = '111201609357@mhs.dinus.ac.id';
		$code = md5($email);
		// echo '<p>Aktivasi Kode Anda';
		// echo '<a href="'.base_url('aktivasi/". $code ."').'">Kode Aktivasi</a>';
		// echo '</p>';
		echo 'Aktivasi kode Anda <a href="http://localhost/printmedia-beta/aktivasi/'.$code.' ">http://localhost/printmedia-beta/aktivasi/'.$code.'</a>';
	}
}
