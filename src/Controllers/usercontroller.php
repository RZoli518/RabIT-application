<?php
class Usercontroller
{
	public $name = 'User';

	public function main(array $variables)
	{
		$userModel = new UserModel;
		
		if(isset($variables['data']))
		{
			$requestData = $userModel->get_data($variables['data']);
			$view = new ViewLoader('userlist');
			$view->assign('title', $requestData['title']);
			$view->assign('content', $requestData['content']);
		}
		else
		{
			echo "No data to show";
		}
	}
}