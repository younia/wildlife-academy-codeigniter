<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends CI_Controller {

	public function view($quiz_id)
	{
		$this->load->model('Quiz_model');
		$this->load->model('Question_model');
		//$this->load->model('Answer_model');
		
		$data['quiz'] = $this->Quiz_model->get_by_id($quiz_id);
		$data['questions'] = $this->Qestion_model->get_by_id($question_id);
		$data['correct'] = $this->Question_model->get_correct_answer($correct);
		
		//$question->corrrect = $answer->id
		
		$this->load->view('course/view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */