<?php 

class Crudbarang extends CI_Controller{

	function __construct(){
		parent::__construct();
                $this->load->model('mo_barang');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login/masuk"));}
	}
	function kebarang(){
		$data['tb_barang'] = $this->mo_barang->tampil_data()->result();
		$this->load->view('vi_daftarbarang');
	}
}