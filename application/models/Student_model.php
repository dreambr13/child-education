<?php
Class Student_model extends CI_model {
	public function getstudents(){
		$this->db->select('*');
		$this->db->from('students');
		return $this->db->get()->result_array();
	}

	public function addStudent($insert_data){
		$this->db->insert('students',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function deleteStudent($chosen_id) {
		$this->db->where('number',$chosen_id);
		$this->db->delete('students');
	}

	public function updateStudent($update_data,$number){
		$this->db->where('number',$number);
		$this->db->update('students',$update_data);

	}
}
