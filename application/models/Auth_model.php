<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{ 
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    public function Insert($table,$data)
    {
        $res = $this->db->insert($table, $data); 
        return $res; 
    }

    public function login($table, $data)
    {
        $res = $this->db->get_where($table, $data);
        return $res;
    }
    
    public function aktivasi($email)
    {
        $data = array(
            'status' => 'Aktif',
        );
        $this->db->from('auth');
        $this->db->where('token', $email);
        $this->db->update('auth', $data);
        return true;
    }

    public function GetWhere($table, $data){
        $res=$this->db->get_where($table, $data);
        return $res->result_array();
    }

}
?>