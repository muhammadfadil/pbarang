<?php 

class Crudpinjambarang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mo_pinjambarang');
                if($this->session->userdata('status') != "login"){
			redirect(site_url("Login/masuk"));}
	}
	function kepinjambarang(){
		$item = $this->mo_pinjambarang->item();
		$view = $this->mo_pinjambarang->viewbarang();
		$data['tb_barang'] = $item;
		$data['view_barang'] = $view;
		$this->load->view('Vi_pinjambarang', $data);
	}
	function cek()
	{
		$this->mo_pinjambarang->cek_ada();
	}
	function hapus()
    {
		$id =  $this->uri->segment(3);
		$nopb =  $this->uri->segment(4);
        $where = array ('id_barang'=>$id, 'no_pb'=>$nopb);
        $this->mo_pinjambarang->hapus_barang($where,'tbl_detailpb');
		$wherespt = array('no_pb' => $nopb);
		$this->mo_pinjambarang->tampillagi($wherespt);
    }
	function selesai($id)
	{
		$where = array ('no_pb'=>$id);
        $this->mo_pinjambarang->hapus_detail($where,'tbl_detailpb');
		$this->mo_pinjambarang->hapus_master($where,'tbl_pinjambarang');
        redirect('crudpinjambarang/kepinjambarang');
	}
}