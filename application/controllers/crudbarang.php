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
    
    //function updatebarang ($id_barang)
   // {
    //    $data['tb_barang'] = $this->mo_barang->getbarang($id_barang);
    //    $this->load->view('Vi_editbarang',$data);
   // }
   
    function edit($id){
        $where = array('id_barang' => $id);
        $data['tb_barang'] = $this->mo_barang->edit_barang($where,'tb_barang')->result();
        $this->load->view('Vi_editbarang',$data);
    }
    
    function updatebarangDb()
    {   
        $id_barang = $this->input->post('id');
        $kd = $this->input->post('kd');
        $nb = $this->input->post('nb');
        $merk = $this->input->post('merk');
        $ns = $this->input->post('ns');
        $kb = $this->input->post('kb');
        $unit = $this->input->post('unit');
        
        $data = array (
            'kode_barang' => $kd,
            'nama_barang' => $nb,
            'merk' => $merk,
            'no_seri' => $ns,
            'kondisi_barang' => $kb,
            'unit' => $unit        
            );
        $where = array (
                    'id_barang'=>$id_barang
                        );  
                        
        //$kondisi['id_barang'] = $this->input->post('id_barang');
        $this->mo_barang->updatebarang($where, $data, 'tb_barang');
        redirect('crudbarang/kebarang');
    }

    function hapus($id)
    {
        $where = array ('id_barang'=>$id);
        $this->mo_barang->hapus_barang($where,'tb_barang');
        redirect('crudbarang/kebarang');   
    }
}
















