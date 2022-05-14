<?php
//split the URL to find the requested page
$request = $_SERVER['QUERY_STRING'];
$params = explode('&', $request);
$page = array_shift($params) . 'controller';
$variables = array();

foreach($params as $param)
{
    //split the URL after &. later I will use this to pass data
    $splitlink = explode("=", $param);
    $variable = $splitlink[0];
    $value = $splitlink[1];
	$variables[$variable] = $value;
}

$target = 'Controllers/'.$page.'.php';
if(file_exists($target))
{
    //Include the code from the selected page's controller to load and display the correct data
    include_once($target);
    $class = ucfirst($page); //make the 1st letter of the page capital to match class names
    if(class_exists($class))
    { 
        $controller = new $class; 
    }
    else
    { 
        die('class does not exists!'); 
    }
}
else
{ 
    die('page does not exist!'); 
}
$controller->main($variables); //Call the main function of controller


function __autoload($className) //autoload function gives access to classes in other files from the Models or Services folders
{
	$file = 'Models/'.$className.'.php';
	if(file_exists($file))
	{ 
        include_once($file); 
    }
	else
	{ 
        $file = 'Services/'.$className.'.php';
        if(file_exists($file))
        { 
            include_once($file); 
        }
        else
        {
            $filename = $className . '.php';
            die("Class '$className' not found."); 
        }
    }
}