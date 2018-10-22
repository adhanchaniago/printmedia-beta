<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model{ 
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


    public function GetWhere($table, $data)
    {
        $res = $this->db->get_where($table, $data);
        return $res;
    }

    public function update($where,$data,$table) /// Fungsi Untuk Edit data
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }

     public function tampilProfile($table, $data)
    {
        $res = $this->db->get_where($table, $data);
        return $res->result_array();
    }
    
    public function viewByProvinsi($province_id)
    {
        $this->db->where('province_id', $province_id);
        $result = $this->db->get('regencies')->result_array(); // Tampilkan semua data kota berdasarkan id provinsi
        
        return $result; 
    }

    public function viewByKota($regency_id)
    {
        $this->db->where('regency_id', $regency_id);
        $result = $this->db->get('districts')->result_array(); // Tampilkan semua data kecamatan berdasarkan id kota
        
        return $result; 
    }
}
