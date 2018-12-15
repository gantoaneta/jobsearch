<?php
function connection($host = "localhost", $username = "urbicaro_urb", $pass = "URBICA.14", $db_name = "urbicaro_urb"){
    $conn = mysqli_connect($host, $username, $pass, $db_name);
    return $conn;
}
