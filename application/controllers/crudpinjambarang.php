<?php 

class Crudpinjambarang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mo_pinjambarang');
                if($this->session->userdata('status') != "login"){
			redirect(site_url("Login/masuk"));}
	}
	function kepinjambarang(){
		$data['tb_barang'] = $this->mo_pinjambarang->tampil_op();
		$this->load->view('Vi_pinjambarang', $data);
	}
	
}