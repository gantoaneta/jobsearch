<?php

function connection($host='localhost', $user='root', $password='antoaneta1', $database='aplicatie'){
    $cm = mysqli_connect($host, $user, $password, $database);
    if($cm == false){
        die($cm . 'nu s-a putut realiza conecsiunea');
    } else {
//        echo "it's ok";
    }
    return $cm;
}