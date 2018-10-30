<?php 

class Crudpinjambarang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mo_pinjambarang');
                if($this->session->userdata('status') != "login"){
			redirect(base_url("login/masuk"));}
	}
	function kepinjambarang(){
		$data['tbl_pinjambarang'] = $this->mo_pinjambarang->tampil_data()->result();
		$this->load->view('vi_pinjambarang');
	}
}