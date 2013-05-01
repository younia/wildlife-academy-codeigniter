<?php 

class Lesson_model extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	
	function get_all(){
		$query = $this->db->get('lessons');
		return $query->result();
	}
	
	function get_by_id($lesson_id){
		$query = $this->db->get_where('lessons', array('id' => $lesson_id));
		return $query->row();
	}
	
	function get_by_course_id($course_id){
		$query = $this->db->get_where('lessons', array('course_id' => $course_id));
		return $query->result();
	}
}


?>