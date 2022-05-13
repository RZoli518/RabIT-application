<?php
$request = $_SERVER['QUERY_STRING'];
$params = explode('&', $request);
$page = array_shift($params);
$variables = array();

foreach($params as $param)
{
    $splitlink = explode("=", $param);
    $variable = $splitlink[0];
    $value = $splitlink[1];
	$variables[$variable] = $value;
}

$target = 'Controllers/'.$page.'.php';
if(file_exists($target))
{
	include_once($target);
	$class = ucfirst($page);
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
$controller->main($variables);

function __autoload($className)
{
	$file = 'Models/'.$className.'.php';
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