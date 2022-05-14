<?php
class Adcontroller
{
	public $name = 'Ad';
    
	public function main(array $variables)
	{
		$adModel = new AdModel;
		
		if(isset($variables['data']))
		{
			//get information from the database then pass it to the view loader to open adlist.php using it
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