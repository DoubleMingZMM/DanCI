<?php
class Info_model extends CI_Model{
	public function getDetail()
	{
		$query = $this->db->get("USER"); // 自带的构造方法
		return $query->result(); // 这里是一个数组，之前就是这里出了问题
	}

	public function insert()
	{
		$data['name'] = 'jianda'; // please read the below note
		$data['password'] = 'Aa111222';

		$this->db->insert('USER', $data);
	}
}
