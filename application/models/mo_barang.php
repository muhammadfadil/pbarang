<?php 

class Mo_barang extends CI_Model{
    
    private $_table = "tb_barang";
 
	function tampil_data()
    {
		return $this->db->get($this->_table)->result();
	} 
    
    function simpan()
    {
        $kd = $this->input->post('kd');
        $nb = $this->input->post('nb');
        $merk = $this->input->post('merk');
        $ns = $this->input->post('ns');
        $kb = $this->input->post('kb');
        $unit = $this->input->post('unit');
        $data = array(
            'kode_barang' => $kd,
            'nama_barang' => $nb,
            'merk' => $merk,
            'no_seri' => $ns,
            'kondisi_barang' => $kb,
            'unit' => $unit
            );
            $this->db->insert('tb_barang',$data);
    }
    
   // function getBarang($id)
    //{
    //    $this->db->where('id_barang',$id);
    //    $this->db->select("*");
    //    $this->db->from("tb_barang");
    //    return $this->db->get();
    //}
    
    function edit_barang($where,$table){		
        return $this->db->get_where($table,$where);
    }
    function updatebarang($where,$data,$table)
    {
       $this->db->where($where);
       $this->db->update ('tb_barang',$data);       
    }
    
    function hapus_barang($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
}