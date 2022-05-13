<?php
class AdModel
{
	private $data = array
	('new' => array('title' => 'New Page', 'content' => 'New test site'),
	 'mvc' => array('title' => 'Advertisements', 'content' => 'Show ads'));
	
	public function get_data($title)
	{
		$returnData = $this->data[$title];
		return $returnData;
	}
}