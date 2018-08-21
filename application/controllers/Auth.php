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
			if(preg_match("/ac.id/", $this->input->post('email', TRUE)) || preg_match("/.edu/", $this->input->post('email', TRUE)) || preg_match("/.com/", $this->input->post('email', TRUE))) {
				date_default_timezone_set("Asia/Jakarta");
				$data = array(
					'email' => $this->input->post('email', TRUE),
					'password' => md5($this->input->post('password', TRUE)),
					'level' => 'Member',
					'token' => md5($this->input->post('email', TRUE)),
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
		$this->load->view('auth/suksesaktivasi', $data);	
	}

	public function login()
	{
		$this->load->view('auth/Login');
	}

	public function proseslogin()
	{		
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[15]');
		$this->form_validation->set_message('required', 'Mohon Maaf! Kolom <b>%s</b> tidak boleh kosong.');
		$this->form_validation->set_message('min_length', 'Mohon Maaf! <b>%s</b> yang dimasukkin kurang dari 8 karakter.');
		$this->form_validation->set_message('max_length', 'Mohon Maaf! <b>%s</b> yang dimasukkin lebih dari 15 karakter.');
		$email=$this->input->post('email', TRUE);
		$password=$this->input->post('password', TRUE);
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('auth/login');
		}
		else
		{
			$cek=$this->Auth_model->login('auth', array('email' => $email, 'password' => md5($password)));

			if( $cek->num_rows() > 0 )
			{
				$data = $cek->row_array();	
				//$this->session->set_userdata('login', TRUE);

				if($data['status'] == 'Aktif')
				{
					if($data['level'] === 'Member' )
					{
						$this->session->set_userdata('akses', 'Member');
						$this->session->set_userdata('email', $data['email']);
						$this->session->set_userdata('status', 'login');
						date_default_timezone_set("Asia/Jakarta");
						$data = array(
							'email' => $this->input->post('email'),
							'alamat_ip' => $this->input->ip_address(),
							'browser' => $this->input->user_agent(),
							'waktu_masuk' => date('Y-m-d h:i:s'),
							'keterangan' => 'Online',
						);
						$data = $this->Auth_model->Insert('activity_user', $data);
						redirect(base_url('user/myprofile'));
					}
					
					if($data['level'] === 'Admin' )
					{
						$this->session->set_userdata('akses', 'Admin');
						$this->session->set_userdata('email', $data['email']);
						$this->session->set_userdata('status', 'login');
						redirect(base_url('Admin'));
					}
				}
				if($data['status'] == 'Belum Aktif')
				{
					$this->session->set_flashdata('error', 'Maaf Akun Anda <b>BELUM AKFITF</b>. Silahkan aktifkan terlebih dahulu dengan cara mengecek Email yang telah kami kirimkan.');
					redirect(base_url('login'));
				}
				if($data['status'] == 'Suspend')
				{
					$this->session->set_flashdata('error', 'Maaf! Akun Anda telah kami <b>SUSPEND</b>. Karena terbukti melanggar beberapa peraturan yang telah diterapkan. Harap hubungi kami melalui menu Kontak, jika terbukti tidak melakukan kesalahan.');
					redirect(base_url('login'));
				}
			}
			else
			{
				$this->session->set_flashdata('error', 'Maaf Akun Anda Tidak Terdaftar');
				redirect(base_url('login'));
			}
		}		
	}

	public function logout()
    {
		$this->session->sess_destroy();
		date_default_timezone_set("Asia/Jakarta");
		$data = array(
			'email' => $this->session->userdata('email'),
			'alamat_ip' => $this->input->ip_address(),
			'browser' => $this->input->user_agent(),
			'waktu_masuk' => date('Y-m-d h:i:s'),
			'keterangan' => 'Offline',
		);
		$data = $this->Auth_model->Insert('activity_user', $data);
        redirect(base_url('login'), 'refresh');
    }

	// public function validasi($email)
	// {
	// 	if(preg_match("/ac.id/", $email) || preg_match("/.edu/", $email) || preg_match("/.com/", $email) ){
	// 		return true;
	// 	} else { 
	// 		return false;
	// 	}           
	// }

	// public function cek()
	// {
	// 	$email = '111201609357@mhs.dinus.ac.id';
	// 	$code = md5($email);
	// 	// echo '<p>Aktivasi Kode Anda';
	// 	// echo '<a href="'.base_url('aktivasi/". $code ."').'">Kode Aktivasi</a>';
	// 	// echo '</p>';
	// 	echo 'Aktivasi kode Anda <a href="http://localhost/printmedia-beta/aktivasi/'.$code.' ">http://localhost/printmedia-beta/aktivasi/'.$code.'</a>';
	// }
}
