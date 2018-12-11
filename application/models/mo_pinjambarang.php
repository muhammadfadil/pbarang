<?php 

class Mo_pinjambarang extends CI_Model{
	private $_table = "tb_barang";
	private $view = "view_barang";
	private $tbl_pinjambarang = "tbl_pinjambarang";
    function save_master()
	{	
		$idpb = $this->input->post('idpb');
		$nopb = $this->input->post('nopb');
		$nospt = $this->input->post('nospt');
		$tanggal = $this->input->post('tanggal');
		$nama1 = $this->input->post('nama1');
		$nama2 = $this->input->post('nama2');
		$tujuan = $this->input->post('tujuan');				
		$data = array(
            'no_pb' => $nopb,
			'no_spt' => $nospt,
            'tanggal' => $tanggal,
            'nama1' => $nama1,
            'nama2' => $nama2,
            'tujuan' => $tujuan
            );
        $this->db->insert($this->tbl_pinjambarang,$data);
		$wi = array('id_pb' => $idpb);
		$wn = array('no_pb' => $nopb);
		$data['view_barang'] = $this->db->get_where($this->view, $wi)->result();
		$data['tb_barang'] = $this->db->get($this->_table)->result();
		$data['tbl_pinjambarang'] = $this->db->get_where($this->tbl_pinjambarang, $wn)->result();
		$this->load->view('Vi_pinjambarang2', $data);
	}
	function save_detail()
	{	
		$idpb = $this->input->post('idpb');		
		$select = $this->input->post('select');
		$unit = $this->input->post('unit');
		$keterangan = $this->input->post('keterangan');				
		$data = array(
            'id_pb' => $idpb,
			'id_barang' => $select,
            'unit' => $unit,
            'keterangan' => $keterangan,
            );
        $this->db->insert('tbl_detailpb',$data);
		$wi = array('id_pb' => $idpb);		
		$data['view_barang'] = $this->db->get_where($this->view, $wi)->result();
		$data['tb_barang'] = $this->db->get($this->_table)->result();
		$data['tbl_pinjambarang'] = $this->db->get_where($this->tbl_pinjambarang, $wi)->result();
		$this->load->view('Vi_pinjambarang2', $data);
	}
	function hapus_barang($where, $table)
	{
		$this->db->where($where);
        $this->db->delete($table);
	}
	function tampillagi($wherespt)
	{
		$data['view_barang'] = $this->db->get_where($this->view, $wherespt)->result();
		$data['tb_barang'] = $this->db->get($this->_table)->result();
		$data['tbl_pinjambarang'] = $this->db->get_where($this->tbl_pinjambarang, $wherespt)->result();
		$this->load->view('Vi_pinjambarang2', $data);
	}
	function hapus_detail($where, $table)
	{
		$this->db->where($where);
        $this->db->delete($table);
	}
	function hapus_master($where, $table)
	{
		$this->db->where($where);
        $this->db->delete($table);
	}
}