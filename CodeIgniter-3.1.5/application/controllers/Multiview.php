<?php
class Multiview extends CI_Controller{
	public function index() {
		$data['todo_list'] = array('zmm','suri','tecent');
		$data['header'] = 'My First Header!';
		$data['content'] = 'My First Content!';
		$this->load->view('multiview/header',$data,true);
		$this->load->view('multiview/content',$data);
	}
}
