<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

	public function view($course_id)
	{
		$this->load->model('Course_model');
		$this->load->model('Lesson_model');
		
		$data['course'] = $this->Course_model->get_by_id($course_id);
		$data['lessons'] = $this->Lesson_model->get_by_course_id($course_id);
		
		$this->load->view('course/view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */