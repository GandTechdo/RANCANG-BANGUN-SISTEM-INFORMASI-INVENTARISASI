<?php 

class User_model extends CI_Model{

	public $table = 'users';
	public $id    = 'id';

     function ambil_data($id)
     {
     	$this->db->where('username', $id);
     	return $this->db->get('user')->row();
     }

     public function tampil_data($table)
     {
     	return $this->db->get($table);
     }
     public function insert_data( $data ,$table){
        $this->db->insert($table, $data); 
     }
     public function hapus_user($where, $table){
     $this->db->where($where);
     $this->db->delete('user');
  }
  public function edit_user($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
   
}