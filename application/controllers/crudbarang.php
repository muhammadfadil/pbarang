<?php 

class Crudbarang extends CI_Controller{

	function __construct(){
		parent::__construct();
                $this->load->model('mo_barang');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login/masuk"));}
	}
	function kebarang(){
		$data['tb_barang'] = $this->mo_barang->tampil_data();
		$this->load->view('Vi_daftarbarang', $data);
	}
    
    function add(){
        $this->load->view('Vi_addbarang');
    }
    
    
    function save(){
            if($this->input->post('save')){
                $this->mo_barang->simpan();
                redirect('crudbarang/kebarang','refresh');
            }else{
            redirect('crudbarang/add','refresh'); 
        }
    }
}