<?php
class Adcontroller
{
	public $name = 'Ad';
    
	public function main(array $variables)
	{
		$adModel = new AdModel;
		
		if(isset($variables['data']))
		{
			$requestData = $adModel->get_data($variables['data']);
			$view = new ViewLoader('adlist');
			$view->assign('title', $requestData['title']);
			$view->assign('content', $requestData['content']);
		}
		else
		{
			echo "No data to show";
		}
	}
}