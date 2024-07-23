<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function show_students(){
		$this->load->model('Student_model');
		$data['students']=$this->Student_model->getstudents();
		$data['page']='student/show_students';
		$this->load->view('menu/content',$data);
	}

	public function add_students() {
		$this->load->model('Student_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$insert_data=array(
				"fname"=>$this->input->post('fname'),
				"lname"=>$this->input->post('lname'),
				"gender"=>$this->input->post('gender'),
				"grade"=>$this->input->post('grade'),
				"address"=>$this->input->post('address'),
				"birth"=>$this->input->post('birth'),
				"parent"=>$this->input->post('parent')
				);
			$data['test']=$this->Student_model->addStudent($insert_data);
		}
		$data['page']='student/add_students';
		$this->load->view('menu/content',$data);
	}

	public function delete_students() {
		//this method will show the students
		$this->load->model('Student_model');
		$data['students']=$this->Student_model->getStudents();
		$data['page']='student/delete_students';
		$this->load->view('menu/content',$data);
	}

	public function remove_student($chosen_id){
		$this->load->model('Student_model');
		$data['deletion']=$this->Student_model->deleteStudent($chosen_id);
		$this->show_students();
	}

	public function update_students() {
		$this->load->model('Student_model');	
		$data['students']=$this->Student_model->getStudents();
		$data['page']='student/update_students';
		$this->load->view('menu/content',$data);
	}

	public function do_update_students() {
		$this->load->model('Student_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$number=$this->input->post('number');
			$a_fname=$this->input->post('fname');
			$a_lname=$this->input->post('lname');
			$a_gender=$this->input->post('gender');
			$a_grade=$this->input->post('grade');
			$a_address=$this->input->post('address');
			$a_birth=$this->input->post('birth');
			$a_parent=$this->input->post('parent');
			//calculate rows
			$rows=0;
			foreach ($number as $a) {
				$rows++;
			};
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(
					"fname"=>$a_fname[$x],
					"lname"=>$a_lname[$x],
					"gender"=>$a_gender[$x],
					"grade"=>$a_grade[$x],
					"address"=>$a_address[$x],
					"birth"=>$a_birth[$x],
					"parent"=>$a_parent[$x]
					);
				$this->Student_model->updateStudent($update_data,$number[$x]);
			}
		$this->show_students();
		}
	}
}