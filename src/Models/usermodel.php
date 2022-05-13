<?php
class UserModel
{
	private $data = array
	('new' => array('title' => 'New Page', 'content' => 'New test site'),
	 'mvc' => array('title' => 'Users', 'content' => 'Show users'));
	
	public function get_data($title)
	{
		$returnData = $this->data[$title];
		return $returnData;
	}
}