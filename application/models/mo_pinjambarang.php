<?php 

class Mo_pinjambarang extends CI_Model{
	private $_table = "tb_barang";
	function tampil_op(){
		return $this->db->get($this->_table)->result();
	}
    
}