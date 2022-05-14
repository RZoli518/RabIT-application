<?php
class Usercontroller
{
	public function main(array $variables)
	{
		$userModel = new UserModel;
		
		if(isset($variables['data']))
		{
			//get information from the database then pass it to the view loader to open userlist.php using it
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