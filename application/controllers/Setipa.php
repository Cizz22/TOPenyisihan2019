<?php
defined('BASEPATH') or exit('No direct script access allowed');

	class Setipa extends CI_Controller{

		function __construct(){
			parent::__construct();
			date_default_timezone_set ("Asia/Jakarta");
			if($this->session->userdata('ID')=="1"){
			redirect('Login');
			}	
		}
		public function index(){
			$this->load->view('V_Mulaiipa');
		}
		function terimakasih(){
			$this->load->view('V_Terima');
		}
		public function Aturwaktu()	{
            $waktu = date("Y-m-d h:i:s");
            $mulai=date("Y-m-d 08:00:00");
            $akhir=date("Y-m-d 10:30:00");
			$sess_data['waktu'] = $waktu;
            
            if(empty($this->session->userdata('waktu'))){
                $this->session->set_userdata($sess_data);
			     redirect("Setipa/penyisihan");
            }
              if(!empty($this->session->userdata('waktu'))){
                $this->session->unset_userdata($sess_data);
			     redirect("Setipa/penyisihan");
            }
                
		}             
		public function penyisihan(){
			$nama['ID'] = $this->session->userdata('ID');
            $this->load->model('M_Soal');
			$this->load->model('M_Login');
            $data['soal'] = $this->M_Soal->get_soalipa();
			$ceknilai = $this->M_Login->cek($nama['ID']);
			if($ceknilai->Nilai != NULL){
				$this->session->set_flashdata('sudah', 'Anda Sudah Mengerjakan Soal');
				redirect('Setipa/index');
			}
			$isi = $data['soal']->result();
			$isinya = array();
			$ids = array("0", "1", "2", "3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","60","61","62","63","64","65","66","67","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89","90","91","92","93","94","95","96","97","98","99");
			
			$id = 0;
			foreach($isi as $a){
				$isinya[$ids[$id]][0] = $a->soal;
				$isinya[$ids[$id]][1] = $a->A;
				$isinya[$ids[$id]][2] = $a->B;
				$isinya[$ids[$id]][3] = $a->C;
				$isinya[$ids[$id]][4] = $a->D;
				$isinya[$ids[$id]][5] = $a->idsoal;
				$isinya[$ids[$id]][6] = $a->tipesoal;
			$id++;
			}
			
			$data['soal'] = $isinya;
			$this->load->view('V_Soalipa', $data);			
	}
	function hitung(){
				$benar = 0;
				$salah = 0;
                $kosong = 0;
				$kunci = $this->db->query('SELECT idsoal,kunci from soalipa');
				$kunci1 = $kunci->result();
				$kunciakhir = array();
				foreach($kunci1 as $kunci2){
					$kunciakhir[$kunci2->idsoal] = $kunci2->kunci;
				}
				$jawaban = ($this->input->post('jawaban'));
               
				if($jawaban){
					foreach($jawaban as $key => $j){
				    if($j == "E"){
						 $kosong++;
					 }else{
                    if($j == $kunciakhir[$key]){
						$benar++;
					}
					if($j != $kunciakhir[$key]){
						$salah++;}
				
                    }
					}
				}
                
				$benar1 = $benar * 4;
				$salah1 = $salah * 1;
                $kosong1 = $kosong * 0;
				$nilai = $benar1 - $salah1 + $kosong1;
				$IDlogin = $this->session->userdata('ID');
				$sess_penyisihan['nilai'] = $nilai;
				$this->session->set_userdata($sess_penyisihan);
			$kirimjawaban = $this->db->query("update login set nilai='$nilai' where ID='$IDlogin'");
	if($this->db->affected_rows()>0)
			echo 1;
		else echo 0;
	}
	}	
