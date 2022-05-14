<?php
class DBService
{
    public function getDbData($sql, $overwrite){ //parameters are the base query and a bool. $overwrite os needed to display usernames for advertisements instead of ids 
        $serverName = 'localhost';
        $userName = 'root';
        $password = 'mysql';
        $dataBase = 'rabit_application_db';
    
        $conn = mysqli_connect($serverName, $userName, $password, $dataBase); //connect to the mysql database using parameters defined above
        if(!$conn){ //check if the connection was succesful
            echo 'Connection error: ' . mysqli_connect_error();
        }
    
        $result = mysqli_query($conn, $sql);  //after the connection was made send the query received as the functions parameter to the database
    
        $dbinfo = mysqli_fetch_all($result, MYSQLI_ASSOC); //

        if($overwrite){
            $counter = 0;
            foreach($dbinfo as $ad){ //userid is overwritten for each line to display the user's name instead of id
                $sql = 'SELECT name FROM user WHERE id=' . $ad['userid'];
                $result = mysqli_query($conn, $sql);
                $name = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $dbinfo[$counter]['userid'] = $name[0]['name'];
                $counter++;
            }
        }
    
        mysqli_free_result($result); //free the query's result from memory
        mysqli_close($conn); //close the database connection
    
        return $dbinfo;
    }
}