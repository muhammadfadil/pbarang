<?php 

class Mo_laporan extends CI_Model{
	private $_table = "tbl_pinjambarang";
	function tampil_laporan(){
		return $this->db->get($this->_table)->result();
	}
    
}