<?php
class Adcontroller
{
	public $name = 'Ad';
    
	public function main(array $variables)
	{
		$adModel = new AdModel;
		
		if(isset($variables['data']))
		{
			$requestData = $adModel->get_data();
			$view = new ViewLoader('adlist');
			$view->assign('data', $requestData);
		}
		else
		{
			echo "No data to show";
		}
	}
}