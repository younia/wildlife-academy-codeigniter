<?php 

class Course_model extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	
	function get_all(){
		$query = $this->db->get('courses');
		return $query->result();
	}
	
	function get_by_id($course_id){
		$query = $this->db->get_where('courses', array('id' => $course_id));
		return $query->row();
	}
	
	//function get_course_by_lesson_id($lesson_id){
		//$query = $this->db->get_where('lessons', array('course_id' => $course_id));
		///return $query->row();
	//}
}


?>