<?php 

class Question_model extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	
	function get_by_id($question_id){
		$query = $this->db->get_where('questions', array('id' => $question_id));
		return $query->row();
	}
	
	function get_correct_answer($correct){
		$query = $this->db->get_where('answers', array('id' => $correct));
		return $query->result();
	}
}

?>