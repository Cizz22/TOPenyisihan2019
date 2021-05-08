<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$this->load->model('M_Login');
		$this->load->view('V_Login');
	}
	
	function masuk(){
		$ID = $this->input->post('ID');
		$pass = $this->input->post('pass');
		$this->load->model('M_Login');
		$hasil = $this->M_Login->cek($ID);
		if($hasil != FALSE){
			$pass1 =  $hasil->Password;
            $mapel = $hasil->Mapel;
				if ($pass == $pass1){
					
					if($mapel == 1){
						$sess_data['ID'] = $hasil->ID;
						$sess_data['pass'] = $hasil->pass;
						$sess_data['mapel'] = 'mipa';
						$sess_data['namaketua'] = $hasil->Ketua;
						$this->session->set_userdata($sess_data);
						redirect(site_url('Setipa'));
					}
					elseif($mapel == 2){
						$sess_data['ID'] = $hasil->ID;
						$sess_data['mapel'] = 'ips';
						$sess_data['namaketua'] = $hasil->Ketua;
						$this->session->set_userdata($sess_data);
						redirect(site_url('Setips'));
					}
                    elseif($mapel == 3){
						$sess_data['ID'] = $hasil->ID;
						$sess_data['mapel'] = 'mat';
						$sess_data['namaketua'] = $hasil->Ketua;
						$this->session->set_userdata($sess_data);
						redirect(site_url('Setmat'));
				} 
				
		}else {
					$this->session->set_flashdata('pass', 'Password Anda salah');
					redirect(site_url('Login'));
				}
		
	}else{
			$this->session->set_flashdata('id', 'ID Anda salah');
			redirect(site_url('Login'));
		}
	
	
}
    function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Login'));
	}
}