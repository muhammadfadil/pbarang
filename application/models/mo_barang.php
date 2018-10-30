<?php 

class Mo_barang extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_barang');
	}
}