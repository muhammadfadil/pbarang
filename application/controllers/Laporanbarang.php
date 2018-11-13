<?php 

class Laporanbarang extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->model('mo_laporan');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login/masuk"));}
	}
	function kelaporan(){
		$data['tbl_pinjambarang'] = $this->mo_laporan->tampil_laporan();
		$this->load->view('Vi_laporan', $data);
	}

}