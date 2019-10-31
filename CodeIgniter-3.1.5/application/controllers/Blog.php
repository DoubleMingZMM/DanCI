<?php
class Blog extends CI_Controller {

	public function index($name, $age)
	{
//		$this->load->view('blog_view');
		echo '1我是：'.$name.'年龄：'.$age;
	}
	public function tecent()
	{
		echo '2页面';
	}
	public function default_method()
	{
		echo '进入默认页面';
	}
	public function _output($output)
	{
		echo "输出类后缀：$output".$output;
	}
	protected function util()
	{
		echo 'private method!';
	}
//	public function _remap($method)
//	{
//		if ($method === 'tecent')
//		{
//			echo '进来了';
//			$this->$method();
//		}
//		else
//		{
//			$this->default_method();
//		}
//	}
}
