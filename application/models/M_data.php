<?php 

class M_data extends CI_Model{
	function tampil_data($id,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id_user', $id);
		return $this->db->get();
		//return $this->db->get_where($table,$where);
	}
	function tampil_data_controller($id,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		return $this->db->get();
		//return $this->db->get_where($table,$where);
	}
	function tampil_field($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by("id", "DESC");
		return $this->db->get();
		//return $this->db->get_where($table,$where);
	}

	function tampil_to_form($id,$page,$sub,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by("id", "DESC");
		$this->db->where('id_user', $id);
		$this->db->where('id_page', $page);
		$this->db->where('id_sub_page', $sub);
		return $this->db->get();
		//return $this->db->get_where($table,$where);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where('id',$where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where('id', $where);
		$this->db->update($table,$data);
	}
	function update_to_form($id,$page,$sub,$data,$table){
		$this->db->where('id_user', $id);
		$this->db->where('id_page', $id);
		$this->db->where('id_sub_page', $sub);
		$this->db->update($table,$data);
	}	
	function update_aplication_field($id,$userid,$sub,$data,$table){
		$this->db->where('id', $id);
		$this->db->where('id_user', $userid);
		$this->db->where('id_sub_page', $sub);
		$this->db->update($table,$data);
	}	
}