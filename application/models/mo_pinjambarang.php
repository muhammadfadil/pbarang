<?php 

class Mo_pinjambarang extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_pinjambarang');
	}
}