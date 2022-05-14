<?php
class AdModel
{
	public function get_data()
	{
        //Include the dbservice.php file and call it's getDbData function
        $service = new DBService;
        $data = $service->getDbData('SELECT * FROM advertisement', TRUE); //we pass the request as the parameter
		$returnData = array();
        foreach($data as $u){
            array_push($returnData, $u); //pass the result of the sql query to the $returnData variable line by line. This is needed to avoid converting arrays to strings
        }
		return $returnData;
	}
}