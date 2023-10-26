<?php 

    $hname = 'localhost';
    $uname = 'root';
    $pass = 'root'; 
    $db = 'arwebsite';

    $con = mysqli_connect($hname, $uname, $pass, $db);

    if(!$con){
        die("Cannot Connect to Database".mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key => $value){
            $data[$key] = trim($value);
            $data[$key] = stripcslashes($value);
            $data[$key] = htmlspecialchars($value);
            $data[$key] = strip_tags($value);
        }
        return $data;
    }

?>