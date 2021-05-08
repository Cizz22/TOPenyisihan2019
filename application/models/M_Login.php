<?php
defined('BASEPATH') or exit('No direct script access allowed');

	class M_Login extends CI_Model{
        
     function cek($ID){
			$this->db->where('ID', $ID);
			$temp=$this->db->get('login');
			if($temp->num_rows()>0)
				return $temp->row();
			else
				return FALSE;   
        
    }
    }
