<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{	
		$data['tamu'] = $this->Mbukutamu->tampil_data()->result();
		$this->load->view('index',$data);
	}
	public function tambah_data(){
		$this->load->view('tambah_data');
	}
	public function proses_tambahdata(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$aktifitas = $this->input->post('aktifitas');
		$data = array(
			'nama' => $nama,
			'email'=> $email,
			'aktifitas'=> $aktifitas,
			'check_in' => date('Y:m:d H:i:s')
			);
			$this->Mbukutamu->proses_tambahdata($data,'tbl_bukutamu');
			redirect('Main');
	}
}
