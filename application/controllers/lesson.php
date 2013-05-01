<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lesson extends CI_Controller {

	public function view($lesson_id)
	{
		//$this->load->model('Course_model');
		$this->load->model('Quiz_model');
		$this->load->model('Lesson_model');
		
		$data['quizes'] = $this->Quiz_model->get_by_lesson_id($lesson_id);
		$data['lesson'] = $this->Lesson_model->get_by_id($lesson_id);
		//$data['course'] = $this->Course_model->get_course_by_lesson_id($lesson_id);
		
		$this->load->view('lesson/view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */