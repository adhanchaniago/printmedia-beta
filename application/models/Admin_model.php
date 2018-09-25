<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function Insert($table,$data)
    {
        $res = $this->db->insert($table, $data); 
        return $res; 
    }

    public function tampiluniv($table)
    {
          $this->db->select('*');
          $this->db->from($table);
    
          $query = $this->db->get();
          return $query->result_array();
          
    }
}
