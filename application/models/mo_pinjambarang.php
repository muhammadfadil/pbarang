<?php 

class Mo_pinjambarang extends CI_Model{
	private $_table = "tb_barang";
	private $view = "view_detail";
	private $tbl_pinjambarang = "tbl_pinjambarang";
	function item()
	{
		return $this->db->get($this->_table)->result();
	}
	function viewbarang()
	{
		$nospt = "";
		$this->db->where('no_spt',$nospt);
		return $this->db->get($this->view)->result();
	}
    function cek_ada()
	{
		$nospt = $this->input->post('nospt');
		$tanggal = $this->input->post('tanggal');
		$nama1 = $this->input->post('nama1');
		$nama2 = $this->input->post('nama2');
		$nama3 = $this->input->post('nama3');
		$select = $this->input->post('select');
		$unit = $this->input->post('unit');
		$this->db->where('no_spt',$nospt);
		$query = $this->db->get($this->tbl_pinjambarang);
		if ($query->num_rows() > 0){
			$data = array(
            'no_spt' => $nospt,
            'id_barang' => $select,
            'unit' => $unit
            );
            $this->db->insert('tbl_detailpb',$data);
		}
		else{
			$data = array(
            'no_spt' => $nospt,
            'tanggal' => $tanggal,
            'nama1' => $nama1,
            'nama2' => $nama2,
            'nama3' => $nama3
            );
            $this->db->insert($this->tbl_pinjambarang,$data);
			$data = array(
            'no_spt' => $nospt,
            'id_barang' => $select,
            'unit' => $unit
            );
            $this->db->insert('tbl_detailpb',$data);
		}
		$where = array('no_spt' => $nospt);
		$data['view_detail'] = $this->db->get_where($this->view, $where)->result();
		$data['tb_barang'] = $this->db->get($this->_table)->result();
		$data['tbl_pinjambarang'] = $this->db->get_where($this->tbl_pinjambarang, $where)->result();
		$this->load->view('Vi_pinjambarang2', $data);
	}
	function hapus_barang($where, $table)
	{
		$this->db->where($where);
        $this->db->delete($table);
	}
	function tampillagi($wherespt)
	{
		$data['view_detail'] = $this->db->get_where($this->view, $wherespt)->result();
		$data['tb_barang'] = $this->db->get($this->_table)->result();
		$data['tbl_pinjambarang'] = $this->db->get_where($this->tbl_pinjambarang, $wherespt)->result();
		$this->load->view('Vi_pinjambarang2', $data);
	}
}