<?php 

class Crudpinjambarang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mo_pinjambarang');
                if($this->session->userdata('status') != "login"){
			redirect(site_url("Login/masuk"));}
	}
	function kepinjambarang(){
		$this->load->view('Vi_pinjambarang');
	}
	function tomaster()
	{
		$this->mo_pinjambarang->save_master();
	}
	function todetail()
	{
		$this->mo_pinjambarang->save_detail();
	}
	function hapus()
    {
		$id =  $this->uri->segment(3);
		$idpb =  $this->uri->segment(4);
        $where = array ('id_barang'=>$id, 'id_pb'=>$idpb);
        $this->mo_pinjambarang->hapus_barang($where,'tbl_detailpb');
		$wherespt = array('id_pb' => $idpb);
		$this->mo_pinjambarang->tampillagi($wherespt);
    }
	function hapusall($id)
	{
		$where = array ('id_pb'=>$id);
        $this->mo_pinjambarang->hapus_detail($where,'tbl_detailpb');
		$this->mo_pinjambarang->hapus_master($where,'tbl_pinjambarang');
        redirect('crudpinjambarang/kepinjambarang');
	}
}