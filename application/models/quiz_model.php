<?php 

class Quiz_model extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	
	function get_by_id($quiz_id){
		$query = $this->db->get_where('quizes', array('id' => $quiz_id));
		return $query->row();
	}
	
	function get_by_lesson_id($lesson_id){
		$query = $this->db->get_where('quizes', array('lesson_id' => $lesson_id));
		return $query->result();
	}
	
	function get_correct_answer($correct){
		$query = $this->db->get_where('answers', array('id' => $correct));
		return $query->result();
	}
}

?>