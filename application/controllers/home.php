<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Course_model');
		$this->load->model('Lesson_model');
		
		$data['courses'] = $this->Course_model->get_all();
		$data['lessons'] = $this->Lesson_model->get_all();
		
		$this->load->view('home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */