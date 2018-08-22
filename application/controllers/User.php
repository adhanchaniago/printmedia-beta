<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{



	public function myprofile()
	{
		$this->load->view('user/myprofile');
	}

	public function upload()
	{
		$this->load->view('user/upload');
	}

	public function history()
	{
		$this->load->view('user/history');
	}
}
