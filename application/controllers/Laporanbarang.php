<?php 

class Laporanbarang extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->model('mo_laporan');
		$this->load->helper('tgl_indo');
		$this->load->helper('bilang');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login/masuk"));}
	}
	function kelaporan(){
		$data['tbl_pinjambarang'] = $this->mo_laporan->tampil_laporan();
		$this->load->view('Vi_laporan', $data);
	}
	function cetak($id){
		$where = array('id_pb' => $id);
		$data['view_Mlaporan'] = $this->mo_laporan->cetak_laporan($where,'tbl_pinjambarang')->result();
		$data['view_Dlaporan'] = $this->mo_laporan->cetak_laporan($where,'view_barang')->result();
		$this->load->view('PrintLaporan', $data);
	}
}