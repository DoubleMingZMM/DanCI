<?php
class Info_controller extends CI_Controller{
	public function index() {
		$config['hostname'] = '106.12.132.170';
		$config['username'] = 'root';
		$config['password'] = 'Z6m7m919930816';
		$config['database'] = 'chatRoom';
		$config['dbdriver'] = 'mysqli';
		$config['dbprefix'] = '';
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE; // 数据库连接配置
		$this->load->model('Info_model', '', $config); // 加载 model 并携带数据库配置
		$this->Info_model->insert();
		$data['detail'] = $this->Info_model->getDetail(); // 调用 model 中的 getDetail 方法，返回数据
//		print_r($data['detail']);
		$this->load->view('Info_view',$data); // 将数据携带到 view 层
	}
}

