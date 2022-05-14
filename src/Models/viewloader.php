<?php
class ViewLoader //this class is responsible for loading the correct files from the Views folder
{
    private $data = array();
    private $render = FALSE;

    public function __construct($viewName)
    {
        //check if the requested page exists, if it does prepare display it
        $file = 'Views/' . $viewName . '.php';
        if (file_exists($file))
        { 
            $this->render = $file; 
        }        
    }

    public function assign($variable , $value) //this is the callable function of the view loader
    {
        $this->data[$variable] = $value; //prepare to the pass the data to be displayed
    }

    public function __destruct()
    {
        $viewData = $this->data;
        include($this->render); //after the rendering of the file and data are prepared display/render it
    }
}