<?php
class Homecontroller
{
    //the file is necessary for the home page to properly load with the used router, could be dropped with a better navigation system
	public function main(array $variables)
	{	
        //pass data to the view loader to open the home page
        $view = new ViewLoader('home');
        $view->assign('data', ' ');
	}
}