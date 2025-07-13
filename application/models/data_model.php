<?php

class Data_model extends CI_Model{

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function ambil_id_data($id)
	{
		$hasil = $this->db->where('id',$id)->get('data')
		;
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->get('data');
		$this->db->like('no_inv', $keyword);
		$this->db->or_like('nama_koleksi',$keyword);
		$this->db->or_like('jenis_koleksi',$keyword);
		$this->db->or_like('asal_daerah',$keyword);
		$this->db->or_like('perolehan',$keyword);
		$this->db->or_like('tahun_perolehan',$keyword);
		return $this->db->get('data')->result();
	}
  public function edit_data($where, $table)
  {
  	 return $this->db->get_where($table, $where);
  }
   
   public function update_data($where, $data, $table)
   {
   	$this->db->where($where);
   	$this->db->update($table, $data);
   }

  public function hapus_data($where,$table){
  	$this->db->where($where);
  	$this->db->delete($table);
  }
  public function insert_data($table){
  
  	$this->db->get($table, $data);

  	if ($this->db->trans_status() === False ){
  		echo 'rollback';
  	}else{
  		echo 'commited';
  	}
  }

  
}