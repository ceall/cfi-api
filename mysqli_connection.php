<?php
//set_time_limit(0);


function connectQueryClose($sql) {    
    
    $DB_NAME = '';
    $DB_HOST = '';
    $DB_USER = '';
    $DB_PASS = '';
   
  
    //$link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) or die("Error- " .$sql."::". mysqli_connect_error()); 
    $link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    
    $record = array();
    $data = array($record);

    $result = $link->query($sql);
    
    if (!$result) {
        echo $link->error;
    }
    
    $i = 0;

    if (substr(strtolower($sql), 0, 6) == "select") {
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
    }
    
    mysqli_close($link);
    return $data;
}


?>