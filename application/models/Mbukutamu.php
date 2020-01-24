<?php

class Mbukutamu extends CI_model{
	function tampil_data(){
		return $this->db->get('tbl_bukutamu');
	}
	function proses_tambahdata($data,$table){
		return $this->db->insert($table,$data);
	}
}