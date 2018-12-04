<?php 

class Mo_pinjambarang extends CI_Model{
	private $_table = "tb_barang";
	private $view = "view_barang";
	private $tbl_pinjambarang = "tbl_pinjambarang";
	function item()
	{
		return $this->db->get($this->_table)->result();
	}
	function viewbarang()
	{
		$nopb = "";
		$this->db->where('no_pb',$nopb);
		return $this->db->get($this->view)->result();
	}
    function cek_ada()
	{
		$nopb = $this->input->post('nopb');
		$nospt = $this->input->post('nospt');
		$tanggal = $this->input->post('tanggal');
		$nama1 = $this->input->post('nama1');
		$nama2 = $this->input->post('nama2');
		$tujuan = $this->input->post('tujuan');
		$select = $this->input->post('select');
		$unit = $this->input->post('unit');
		$keterangan = $this->input->post('keterangan');
		$this->db->where('no_pb',$nopb);
		$query = $this->db->get($this->tbl_pinjambarang);
		if ($query->num_rows() > 0){
			$data = array(
            'no_pb' => $nopb,
            'id_barang' => $select,
            'unit' => $unit,
			'keterangan' => $keterangan
            );
            $this->db->insert('tbl_detailpb',$data);
		}
		else{
			$data = array(
            'no_pb' => $nopb,
			'no_spt' => $nospt,
            'tanggal' => $tanggal,
            'nama1' => $nama1,
            'nama2' => $nama2,
            'tujuan' => $tujuan
            );
            $this->db->insert($this->tbl_pinjambarang,$data);
			$data = array(
            'no_pb' => $nopb,
            'id_barang' => $select,
            'unit' => $unit,
			'keterangan' => $keterangan
            );
            $this->db->insert('tbl_detailpb',$data);
		}
		$where = array('no_pb' => $nopb);
		$data['view_barang'] = $this->db->get_where($this->view, $where)->result();
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