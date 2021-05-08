<?php
defined('BASEPATH') or exit('No direct script access allowed');

	class M_Soal extends CI_Model{
	function get_soalipa(){
		$this->db->order_by('idsoal', 'ASC');
		$table = 'soalipa';
		return $this->db->get('soalipa');
	}
	function get_soalips(){
		$this->db->order_by('idsoal', 'ASC');
		$table = 'soalips';
		return $this->db->get('soalips');
	}
	function get_soalmat(){
		$this->db->order_by('idsoal', 'ASC');
		$table = 'soalmat';
		return $this->db->get('soalmat');
	}
	
	function cek_nilai($nilai){
		$this->db->where('nilai' , $nilai);
		$temp=$this->db->get('login');
			if($temp->num_rows()>0)
				return $temp->row();
			else
				return FALSE;
		}
}