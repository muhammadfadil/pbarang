<?php 

class Mo_laporan extends CI_Model{
	private $_table = "tbl_pinjambarang";
	function tampil_laporan(){
		return $this->db->get($this->_table)->result();
	}
    function cetak_laporan($where,$table){
		return $this->db->get_where($table,$where);
	}
}