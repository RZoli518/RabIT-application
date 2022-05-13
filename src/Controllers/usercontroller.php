<?php
class Usercontroller
{
	public $name = 'User';

	public function main(array $variables)
	{
		$userModel = new UserModel;
		
		if(isset($variables['data']))
		{
			$requestData = $userModel->get_data();
			$view = new ViewLoader('userlist');
			$view->assign('data', $requestData);
		}
		else
		{
			echo "No data to show";
		}
	}
}