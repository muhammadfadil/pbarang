<?php 

class Crudpinjambarang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mo_pinjambarang');
	}
	function kepinjambarang(){
		$data['tbl_pinjambarang'] = $this->mo_pinjambarang->tampil_data()->result();
		$this->load->view('vi_pinjambarang');
	}
}