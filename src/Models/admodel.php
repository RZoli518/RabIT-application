<?php
class AdModel
{
	public function get_data()
	{
        $data = $this->getDbData();
		$returnData = array();
        foreach($data as $u){
            array_push($returnData, $u);
        }
		return $returnData;
	}

    function getDbData(){
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        $conn = mysqli_connect($servername, $username, $password, 'rabit_application_db');
        if(!$conn){
            echo 'Connection error: ' . mysqli_connect_error();
        }

        $sql = 'SELECT * FROM advertisement';
        $result = mysqli_query($conn, $sql);

        $ads = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);
        mysqli_close($conn);

        return $ads;
    }
}